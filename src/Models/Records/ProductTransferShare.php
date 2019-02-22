<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductTransferShare
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductTransferShare[] query()
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
class ProductTransferShare extends BaseRecordModel
{
    public static $objectApiName = 'ProductTransferShare';
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
