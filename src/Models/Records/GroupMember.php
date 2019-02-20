<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class GroupMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method GroupMember[] query()
 *
 * @property string $Id
 * @property string $GroupId
 * @property string $UserOrGroupId
 * @property \Carbon\Carbon $SystemModstamp
 */
class GroupMember extends BaseRecordModel
{
    public static $objectApiName = 'GroupMember';
    protected $defaultFields = [
        'Id' => null,
        'GroupId' => null,
        'UserOrGroupId' => null,
        'SystemModstamp' => 'datetime',
    ];
}
