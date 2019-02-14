<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CustomPermissionDependency
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CustomPermissionDependency[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string CustomPermissionId
 * @property string RequiredCustomPermissionId
 */
class CustomPermissionDependency extends BaseRecordModel
{
    protected static $objectApiName = 'CustomPermissionDependency';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'CustomPermissionId' => null,
        'RequiredCustomPermissionId' => null,
    ];
}
