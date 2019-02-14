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
 * @property string Id
 * @property string ContactId
 * @property string UserOrGroupId
 * @property mixed ContactAccessLevel
 * @property mixed RowCause
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 */
class ContactShare extends BaseRecordModel
{
    protected static $objectApiName = 'ContactShare';
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
