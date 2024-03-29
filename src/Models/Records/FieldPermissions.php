<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class FieldPermissions
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method FieldPermissions[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $SobjectType
 * @property string $Field
 * @property bool $PermissionsEdit
 * @property bool $PermissionsRead
 * @property \Carbon\Carbon $SystemModstamp
 */
class FieldPermissions extends BaseRecordModel
{
    public static $objectApiName = 'FieldPermissions';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'SobjectType' => null,
        'Field' => null,
        'PermissionsEdit' => 'bool',
        'PermissionsRead' => 'bool',
        'SystemModstamp' => 'datetime',
    ];
}
