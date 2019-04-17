<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 14/02/19
 * Time: 5:55 PM
 */

namespace CNSDose\Salesforce\Models;

use CNSDose\Salesforce\Models\Metadata\AsyncResult;
use CNSDose\Salesforce\Models\Metadata\CancelDeployResult;
use CNSDose\Salesforce\Models\Metadata\DeployOptions;
use CNSDose\Salesforce\Models\Metadata\DeployResult;
use CNSDose\Salesforce\Models\Metadata\ListMetadataQuery;
use CNSDose\Salesforce\Models\Metadata\ListMetadataResponse;
use CNSDose\Salesforce\Models\Metadata\RetrieveRequest;
use CNSDose\Salesforce\Models\Metadata\RetrieveResult;
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
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
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

    /**
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
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

    /**
     * @param $fullName
     * @return static|null
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
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

    /**
     * @param $newFullName
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
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

    /**
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
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

    /**
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
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

    /**
     * @param ListMetadataQuery|ListMetadataQuery[] $queries
     * @param float|null $asOfVersion
     * @return ListMetadataResponse
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     */
    public static function listMetadata($queries, float $asOfVersion = null): ListMetadataResponse
    {
        if ($asOfVersion === null) {
            $asOfVersion = (float)substr(config('salesforce.api_version'), 1);
        }
        if (!is_array($queries)) {
            $queries = [$queries];
        }
        $payload = new \stdClass();
        $payload->queries = array_map(function (ListMetadataQuery $query) {
            return new \SoapVar(
                $query,
                SOAP_ENC_OBJECT,
                'ListMetadataQuery',
                self::$METADATA_SOAP_NAMESPACE);
        }, $queries);
        $payload->asOfVersion = $asOfVersion;
        $response = self::getSoapClient()->listMetadata($payload);
        return self::coerceObject($response, ListMetadataResponse::class);
    }

    /**
     * @return mixed
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public function delete()
    {
        $payload = (object)[
            'type' => static::getModelName(),
            'fullNames' => [$this->fullName],
        ];
        return self::getSoapClient()->deleteMetadata($payload);
    }

    /**
     * @param RetrieveRequest $retrieveRequest
     * @return AsyncResult
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public static function retrieve(RetrieveRequest $retrieveRequest): AsyncResult
    {
        $payload = new \stdClass();
        $payload->retrieveRequest = new \SoapVar($retrieveRequest, SOAP_ENC_OBJECT, 'RetrieveRequest', self::$METADATA_SOAP_NAMESPACE);
        $response = self::getSoapClient()->retrieve($payload);
        return self::coerceObject($response->result, AsyncResult::class);
    }

    /**
     * @param string $id
     * @param bool $includeZip
     * @return RetrieveResult
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public static function checkRetrieveStatus(string $id, bool $includeZip = true): RetrieveResult
    {
        $payload = new \stdClass();
        $payload->asyncProcessId = $id;
        $payload->includeZip = $includeZip;
        $response = self::getSoapClient()->checkRetrieveStatus($payload);
        return self::coerceObject($response->result, RetrieveResult::class);
    }

    /**
     * @param string $zipBase64
     * @param DeployOptions $deployOptions
     * @return AsyncResult
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public static function deploy(string $zipBase64, DeployOptions $deployOptions): AsyncResult
    {
        $payload = new \stdClass();
        $payload->ZipFile = $zipBase64;
        $payload->DeployOptions = new \SoapVar($deployOptions, SOAP_ENC_OBJECT, 'DeployOptions', self::$METADATA_SOAP_NAMESPACE);
        $response = self::getSoapClient()->deploy($payload);
        return self::coerceObject($response->result, AsyncResult::class);
    }

    /**
     * @param string $id
     * @param bool $includeDetails
     * @return DeployResult
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public static function checkDeployStatus(string $id, bool $includeDetails = true): DeployResult
    {
        $payload = new \stdClass();
        $payload->asyncProcessId = $id;
        $payload->includeDetails = $includeDetails;
        $response = self::getSoapClient()->checkDeployStatus($payload);
        return self::coerceObject($response->result, DeployResult::class);
    }

    /**
     * @param string $id
     * @return CancelDeployResult
     * @throws \CNSDose\Salesforce\Exceptions\BaseException
     * @throws \SoapFault
     */
    public static function cancelDeploy(string $id): CancelDeployResult
    {
        $response = self::getSoapClient()->cancelDeploy($id);
        return self::coerceObject($response->result, CancelDeployResult::class);
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
