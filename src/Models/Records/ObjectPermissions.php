<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ObjectPermissions
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ObjectPermissions[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property mixed $SobjectType
 * @property bool $PermissionsCreate
 * @property bool $PermissionsRead
 * @property bool $PermissionsEdit
 * @property bool $PermissionsDelete
 * @property bool $PermissionsViewAllRecords
 * @property bool $PermissionsModifyAllRecords
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class ObjectPermissions extends BaseRecordModel
{
    protected static $objectApiName = 'ObjectPermissions';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'SobjectType' => null,
        'PermissionsCreate' => 'bool',
        'PermissionsRead' => 'bool',
        'PermissionsEdit' => 'bool',
        'PermissionsDelete' => 'bool',
        'PermissionsViewAllRecords' => 'bool',
        'PermissionsModifyAllRecords' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
