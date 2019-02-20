<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PermissionSetAssignment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PermissionSetAssignment[] query()
 *
 * @property string $Id
 * @property string $PermissionSetId
 * @property string $AssigneeId
 * @property \Carbon\Carbon $SystemModstamp
 */
class PermissionSetAssignment extends BaseRecordModel
{
    public static $objectApiName = 'PermissionSetAssignment';
    protected $defaultFields = [
        'Id' => null,
        'PermissionSetId' => null,
        'AssigneeId' => null,
        'SystemModstamp' => 'datetime',
    ];
}
