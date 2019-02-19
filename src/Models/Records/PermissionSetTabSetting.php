<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PermissionSetTabSetting
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PermissionSetTabSetting[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property mixed Visibility
 * @property string Name
 * @property \Carbon\Carbon SystemModstamp
 */
class PermissionSetTabSetting extends BaseRecordModel
{
    protected static $objectApiName = 'PermissionSetTabSetting';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'Visibility' => null,
        'Name' => null,
        'SystemModstamp' => 'datetime',
    ];
}
