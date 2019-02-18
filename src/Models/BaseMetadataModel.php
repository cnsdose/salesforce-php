<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 14/02/19
 * Time: 5:55 PM
 */

namespace CNSDose\Salesforce\Models;

use CNSDose\Salesforce\Support\Authentication;

/**
 * Class BaseMetadataModel
 * @package CNSDose\Salesforce\Models
 *
 * @property string|null $fullName
 */
class BaseMetadataModel
{
    /**
     * @return \SoapClient
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public static function getSoapClient(): \SoapClient
    {
        $soapClient = new \SoapClient(config('salesforce.metadata_wsdl') ?: __DIR__ . '/../../wsdl/metadata.wsdl.xml', [
            'user_agent' => 'salesforce-php/' . config('salesforce.api_version'),
            'encoding' => 'utf-8',
            'trace' => 1,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            'sessionId' => Authentication::getAccessToken(),
        ]);
        $sessionHeader = new \SoapHeader(
            'http://soap.sforce.com/2006/04/metadata',
            'SessionHeader',
            new \SoapVar([
                'sessionId' => new \SoapVar(Authentication::getAccessToken(), XSD_STRING),
            ], SOAP_ENC_OBJECT),
            false
        );

        $soapClient->__setSoapHeaders($sessionHeader);
        $soapClient->__setLocation(sprintf(
            'https://ap8.salesforce.com/services/Soap/m/%s/%s',
            substr(config('salesforce.api_version'), 1),
            Authentication::getOrganisationId()
        ));
        return $soapClient;
    }

    private function getModelName()
    {
        return substr(static::class, strrpos(static::class, '\\') + 1);
    }

    public function create()
    {
        $payload = new \stdClass();
        $payload->metadata = new \SoapVar(
            $this,
            SOAP_ENC_OBJECT,
            $this->getModelName(),
            'http://soap.sforce.com/2006/04/metadata');
        return self::getSoapClient()->createMetadata($payload);
    }

    public function rename($newFullName)
    {
        $payload = (object)[
            'type' => $this->getModelName(),
            'oldFullName' => $this->fullName,
            'newFullName' => $newFullName,
        ];
        // exception if error
        $response = self::getSoapClient()->renameMetadata($payload);
        if ($response->result->success) {
            $this->fullName = $newFullName;
        }
        return $response;
    }

    public function update()
    {
        $payload = new \stdClass();
        $payload->metadata = new \SoapVar(
            $this,
            SOAP_ENC_OBJECT,
            $this->getModelName(),
            'http://soap.sforce.com/2006/04/metadata');
        return self::getSoapClient()->updateMetadata($payload);
    }

    public function delete()
    {
        $payload = (object)[
            'type' => $this->getModelName(),
            'fullNames' => [$this->fullName],
        ];
        return self::getSoapClient()->deleteMetadata($payload);
    }
}
