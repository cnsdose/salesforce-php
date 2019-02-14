<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LoginHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LoginHistory[] query()
 *
 * @property string Id
 * @property string UserId
 * @property \Carbon\Carbon LoginTime
 * @property mixed LoginType
 * @property string SourceIp
 * @property string LoginUrl
 * @property string AuthenticationServiceId
 * @property string LoginGeoId
 * @property mixed TlsProtocol
 * @property mixed CipherSuite
 * @property string Browser
 * @property string Platform
 * @property string Status
 * @property string Application
 * @property string ClientVersion
 * @property string ApiType
 * @property string ApiVersion
 * @property string CountryIso
 */
class LoginHistory extends BaseRecordModel
{
    protected static $objectApiName = 'LoginHistory';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'LoginTime' => 'datetime',
        'LoginType' => null,
        'SourceIp' => null,
        'LoginUrl' => null,
        'AuthenticationServiceId' => null,
        'LoginGeoId' => null,
        'TlsProtocol' => null,
        'CipherSuite' => null,
        'Browser' => null,
        'Platform' => null,
        'Status' => null,
        'Application' => null,
        'ClientVersion' => null,
        'ApiType' => null,
        'ApiVersion' => null,
        'CountryIso' => null,
    ];
}
