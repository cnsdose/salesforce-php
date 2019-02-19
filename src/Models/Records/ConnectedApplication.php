<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ConnectedApplication
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ConnectedApplication[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $OptionsAllowAdminApprovedUsersOnly
 * @property bool $OptionsRefreshTokenValidityMetric
 * @property bool $OptionsHasSessionLevelPolicy
 * @property bool $OptionsIsInternal
 * @property bool $OptionsFullContentPushNotifications
 * @property mixed $MobileSessionTimeout
 * @property mixed $PinLength
 * @property mixed $StartUrl
 * @property mixed $MobileStartUrl
 * @property mixed $RefreshTokenValidityPeriod
 */
class ConnectedApplication extends BaseRecordModel
{
    protected static $objectApiName = 'ConnectedApplication';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'OptionsAllowAdminApprovedUsersOnly' => 'bool',
        'OptionsRefreshTokenValidityMetric' => 'bool',
        'OptionsHasSessionLevelPolicy' => 'bool',
        'OptionsIsInternal' => 'bool',
        'OptionsFullContentPushNotifications' => 'bool',
        'MobileSessionTimeout' => null,
        'PinLength' => null,
        'StartUrl' => null,
        'MobileStartUrl' => null,
        'RefreshTokenValidityPeriod' => null,
    ];
}
