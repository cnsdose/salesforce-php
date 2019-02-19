<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentWorkspaceMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentWorkspaceMember[] query()
 *
 * @property string $Id
 * @property string $ContentWorkspaceId
 * @property string $ContentWorkspacePermissionId
 * @property string $MemberId
 * @property mixed $MemberType
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 */
class ContentWorkspaceMember extends BaseRecordModel
{
    protected static $objectApiName = 'ContentWorkspaceMember';
    protected $defaultFields = [
        'Id' => null,
        'ContentWorkspaceId' => null,
        'ContentWorkspacePermissionId' => null,
        'MemberId' => null,
        'MemberType' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
    ];
}
