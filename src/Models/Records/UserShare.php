<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserShare[] query()
 *
 * @property string $Id
 * @property string $UserId
 * @property string $UserOrGroupId
 * @property mixed $UserAccessLevel
 * @property mixed $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsActive
 */
class UserShare extends BaseRecordModel
{
    public static $objectApiName = 'UserShare';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'UserOrGroupId' => null,
        'UserAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsActive' => 'bool',
    ];
}
