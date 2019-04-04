<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Approval
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Approval[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ParentId
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property string $Status
 * @property string $RequestComment
 * @property string $ApproveComment
 * @property \Carbon\Carbon $SystemModstamp
 */
class Approval extends BaseRecordModel
{
    public static $objectApiName = 'Approval';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ParentId' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'Status' => null,
        'RequestComment' => null,
        'ApproveComment' => null,
        'SystemModstamp' => 'datetime',
    ];
}
