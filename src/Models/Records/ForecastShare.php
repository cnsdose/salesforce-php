<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ForecastShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ForecastShare[] query()
 *
 * @property string $Id
 * @property string $UserRoleId
 * @property string $UserOrGroupId
 * @property mixed $AccessLevel
 * @property bool $CanSubmit
 * @property mixed $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 */
class ForecastShare extends BaseRecordModel
{
    protected static $objectApiName = 'ForecastShare';
    protected $defaultFields = [
        'Id' => null,
        'UserRoleId' => null,
        'UserOrGroupId' => null,
        'AccessLevel' => null,
        'CanSubmit' => 'bool',
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
    ];
}
