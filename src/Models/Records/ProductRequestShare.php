<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductRequestShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductRequestShare[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property string UserOrGroupId
 * @property mixed AccessLevel
 * @property mixed RowCause
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property bool IsDeleted
 */
class ProductRequestShare extends BaseRecordModel
{
    protected static $objectApiName = 'ProductRequestShare';
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
