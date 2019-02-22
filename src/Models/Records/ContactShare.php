<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContactShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContactShare[] query()
 *
 * @property string $Id
 * @property string $ContactId
 * @property string $UserOrGroupId
 * @property string $ContactAccessLevel
 * @property string $RowCause
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property bool $IsDeleted
 */
class ContactShare extends BaseRecordModel
{
    public static $objectApiName = 'ContactShare';
    protected $defaultFields = [
        'Id' => null,
        'ContactId' => null,
        'UserOrGroupId' => null,
        'ContactAccessLevel' => null,
        'RowCause' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'IsDeleted' => 'bool',
    ];
}
