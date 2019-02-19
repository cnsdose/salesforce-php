<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastingShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastingShare[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserOrGroupId
 * @property string $SharedForecastManagerRoleId
 * @property mixed $AccessLevel
 * @property mixed $RoleType
 */
class ForecastingShare extends BaseRecordModel
{
    protected static $objectApiName = 'ForecastingShare';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserOrGroupId' => null,
        'SharedForecastManagerRoleId' => null,
        'AccessLevel' => null,
        'RoleType' => null,
    ];
}
