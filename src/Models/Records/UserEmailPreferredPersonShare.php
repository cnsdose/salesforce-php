<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class UserEmailPreferredPersonShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method UserEmailPreferredPersonShare[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $UserOrGroupId
 * @property string $AccessLevel
 * @property string $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class UserEmailPreferredPersonShare extends BaseRecordModel
{
    public static $objectApiName = 'UserEmailPreferredPersonShare';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'UserOrGroupId' => null,
        'AccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
