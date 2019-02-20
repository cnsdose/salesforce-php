<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentWorkspacePermission
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentWorkspacePermission[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property mixed $Type
 * @property bool $PermissionsManageWorkspace
 * @property bool $PermissionsAddContent
 * @property bool $PermissionsAddContentOBO
 * @property bool $PermissionsArchiveContent
 * @property bool $PermissionsDeleteContent
 * @property bool $PermissionsFeatureContent
 * @property bool $PermissionsViewComments
 * @property bool $PermissionsAddComment
 * @property bool $PermissionsModifyComments
 * @property bool $PermissionsTagContent
 * @property bool $PermissionsDeliverContent
 * @property bool $PermissionsChatterSharing
 * @property bool $PermissionsOrganizeFileAndFolder
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $LastModifiedById
 * @property string $Description
 */
class ContentWorkspacePermission extends BaseRecordModel
{
    public static $objectApiName = 'ContentWorkspacePermission';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Type' => null,
        'PermissionsManageWorkspace' => 'bool',
        'PermissionsAddContent' => 'bool',
        'PermissionsAddContentOBO' => 'bool',
        'PermissionsArchiveContent' => 'bool',
        'PermissionsDeleteContent' => 'bool',
        'PermissionsFeatureContent' => 'bool',
        'PermissionsViewComments' => 'bool',
        'PermissionsAddComment' => 'bool',
        'PermissionsModifyComments' => 'bool',
        'PermissionsTagContent' => 'bool',
        'PermissionsDeliverContent' => 'bool',
        'PermissionsChatterSharing' => 'bool',
        'PermissionsOrganizeFileAndFolder' => 'bool',
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'LastModifiedById' => null,
        'Description' => null,
    ];
}
