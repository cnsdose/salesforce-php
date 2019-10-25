<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LoginEvent
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LoginEvent[] query()
 *
 * @property string $Id
 * @property \Carbon\Carbon $CreatedDate
 * @property string $EventIdentifier
 * @property string $UserId
 * @property string $Username
 * @property \Carbon\Carbon $EventDate
 * @property string $RelatedEventIdentifier
 * @property string $PolicyId
 * @property string $PolicyOutcome
 * @property float $EvaluationTime
 * @property string $SessionKey
 * @property string $LoginKey
 * @property string $SessionLevel
 * @property string $SourceIp
 * @property string $AdditionalInfo
 * @property string $ApiType
 * @property string $ApiVersion
 * @property string $Application
 * @property string $AuthServiceId
 * @property string $Browser
 * @property string $HttpMethod
 * @property string $CountryIso
 * @property float $LoginLatitude
 * @property float $LoginLongitude
 * @property string $Country
 * @property string $City
 * @property string $PostalCode
 * @property string $Subdivision
 * @property string $CipherSuite
 * @property string $ClientVersion
 * @property string $LoginGeoId
 * @property string $LoginHistoryId
 * @property string $LoginType
 * @property string $LoginUrl
 * @property string $Platform
 * @property string $Status
 * @property string $TlsProtocol
 * @property string $UserType
 */
class LoginEvent extends BaseRecordModel
{
    public static $objectApiName = 'LoginEvent';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'EventIdentifier' => null,
        'UserId' => null,
        'Username' => null,
        'EventDate' => 'datetime',
        'RelatedEventIdentifier' => null,
        'PolicyId' => null,
        'PolicyOutcome' => null,
        'EvaluationTime' => 'number:18,0',
        'SessionKey' => null,
        'LoginKey' => null,
        'SessionLevel' => null,
        'SourceIp' => null,
        'AdditionalInfo' => null,
        'ApiType' => null,
        'ApiVersion' => null,
        'Application' => null,
        'AuthServiceId' => null,
        'Browser' => null,
        'HttpMethod' => null,
        'CountryIso' => null,
        'LoginLatitude' => 'number:3,6',
        'LoginLongitude' => 'number:3,6',
        'Country' => null,
        'City' => null,
        'PostalCode' => null,
        'Subdivision' => null,
        'CipherSuite' => null,
        'ClientVersion' => null,
        'LoginGeoId' => null,
        'LoginHistoryId' => null,
        'LoginType' => null,
        'LoginUrl' => null,
        'Platform' => null,
        'Status' => null,
        'TlsProtocol' => null,
        'UserType' => null,
    ];
}
