<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 14/02/19
 * Time: 5:55 PM
 */

namespace CNSDose\Salesforce\Models;

use CNSDose\Salesforce\Support\Authentication;

class BaseMetadataModel
{
    /**
     * === === === === ===
     * SOAP client
     * === === === === ===
     */
    protected static $METADATA_SERVER_URL = 'https://ap8.salesforce.com/services/Soap/m/%s/%s';
    protected static $METADATA_SOAP_NAMESPACE = 'http://soap.sforce.com/2006/04/metadata';

    /**
     * @return \SoapClient
     * @throws \CNSDose\Standards\Exceptions\StandardException
     */
    public static function getSoapClient(): \SoapClient
    {
        $soapClient = new \SoapClient(__DIR__ . '/../../wsdl/metadata.wsdl.xml', [
            'user_agent' => 'salesforce-php/' . config('salesforce.api_version'),
            'encoding' => 'utf-8',
            'trace' => 1,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            'sessionId' => Authentication::getAccessToken(),
        ]);
        $sessionHeader = new \SoapHeader(
            self::$METADATA_SOAP_NAMESPACE,
            'SessionHeader',
            new \SoapVar([
                'sessionId' => new \SoapVar(Authentication::getAccessToken(), XSD_STRING),
            ], SOAP_ENC_OBJECT),
            false
        );

        $soapClient->__setSoapHeaders($sessionHeader);
        $soapClient->__setLocation(sprintf(
            self::$METADATA_SERVER_URL,
            substr(config('salesforce.api_version'), 1),
            Authentication::getOrganisationId()
        ));
        return $soapClient;
    }
}
