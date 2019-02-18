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
abstract class BaseMetadataModel
{
    public static $classMap = [];

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
        $soapClient = new \SoapClient(config('salesforce.metadata_wsdl') ?: __DIR__ . '/../../wsdl/metadata.wsdl.xml', [
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

    private static function getModelName()
    {
        return substr(static::class, strrpos(static::class, '\\') + 1);
    }

    public function create()
    {
        $payload = new \stdClass();
        $payload->metadata = new \SoapVar(
            $this,
            SOAP_ENC_OBJECT,
            static::getModelName(),
            self::$METADATA_SOAP_NAMESPACE);
        return self::getSoapClient()->createMetadata($payload);
    }

    public static function read($fullName)
    {
        $payload = (object)[
            'type' => static::getModelName(),
            'fullNames' => [$fullName],
        ];
        $response = self::getSoapClient()->readMetadata($payload);
        if (empty($response->result->records)) {
            return null;
        }
        return static::coerceObject($response->result->records);
    }

    public function rename($newFullName)
    {
        $payload = (object)[
            'type' => static::getModelName(),
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
            static::getModelName(),
            self::$METADATA_SOAP_NAMESPACE);
        return self::getSoapClient()->updateMetadata($payload);
    }

    public function upsert()
    {
        $payload = new \stdClass();
        $payload->metadata = new \SoapVar(
            $this,
            SOAP_ENC_OBJECT,
            static::getModelName(),
            self::$METADATA_SOAP_NAMESPACE);
        return self::getSoapClient()->upsertMetadata($payload);
    }

    public function delete()
    {
        $payload = (object)[
            'type' => static::getModelName(),
            'fullNames' => [$this->fullName],
        ];
        return self::getSoapClient()->deleteMetadata($payload);
    }

    public static function getClassMap(): array
    {
        if (!empty(get_parent_class(static::class))) {
            return array_merge(call_user_func([get_parent_class(static::class), 'getClassMap']), static::$classMap);
        }
        return static::$classMap;
    }

    public static function coerceObject($object, $class = null)
    {
        if ($class === null) {
            $class = static::class;
        }
        $result = new $class;

        if (method_exists($class, 'getClassMap')) {
            $map = $class::getClassMap();
        } else {
            $map = $class::$classMap;
        }
        foreach ($object as $field => $value) {
            if (array_key_exists($field, $map)) {
                $multiple = $map[$field]['multiple'];
                $type = $map[$field]['type'];
                if ($multiple && is_array($value)) {
                    $result->$field = array_map(function ($value) use ($type) {
                        return self::coerceObject($value, $type);
                    }, $value);
                } else {
                    $result->$field = self::coerceObject($value, $type);
                }
            } else {
                $result->$field = $value;
            }
        }

        return $result;
    }
}
