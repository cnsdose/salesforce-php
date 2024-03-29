<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AuthSession
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AuthSession[] query()
 *
 * @property string $Id
 * @property string $UsersId
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property mixed $NumSecondsValid
 * @property string $UserType
 * @property string $SourceIp
 * @property string $LoginType
 * @property string $SessionType
 * @property string $SessionSecurityLevel
 * @property string $LogoutUrl
 * @property string $ParentId
 * @property string $LoginHistoryId
 * @property string $LoginGeoId
 * @property bool $IsCurrent
 */
class AuthSession extends BaseRecordModel
{
    public static $objectApiName = 'AuthSession';
    protected $defaultFields = [
        'Id' => null,
        'UsersId' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'NumSecondsValid' => null,
        'UserType' => null,
        'SourceIp' => null,
        'LoginType' => null,
        'SessionType' => null,
        'SessionSecurityLevel' => null,
        'LogoutUrl' => null,
        'ParentId' => null,
        'LoginHistoryId' => null,
        'LoginGeoId' => null,
        'IsCurrent' => 'bool',
    ];
}
