<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentWorkspace
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentWorkspace[] query()
 *
 * @property string Id
 * @property string Name
 * @property string Description
 * @property mixed TagModel
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastModifiedDate
 * @property string DefaultRecordTypeId
 * @property bool IsRestrictContentTypes
 * @property bool IsRestrictLinkedContentTypes
 * @property mixed WorkspaceType
 * @property bool ShouldAddCreatorMembership
 * @property \Carbon\Carbon LastWorkspaceActivityDate
 * @property string RootContentFolderId
 * @property string NamespacePrefix
 * @property string DeveloperName
 * @property string WorkspaceImageId
 */
class ContentWorkspace extends BaseRecordModel
{
    protected static $objectApiName = 'ContentWorkspace';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Description' => null,
        'TagModel' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastModifiedDate' => 'datetime',
        'DefaultRecordTypeId' => null,
        'IsRestrictContentTypes' => 'bool',
        'IsRestrictLinkedContentTypes' => 'bool',
        'WorkspaceType' => null,
        'ShouldAddCreatorMembership' => 'bool',
        'LastWorkspaceActivityDate' => 'datetime',
        'RootContentFolderId' => null,
        'NamespacePrefix' => null,
        'DeveloperName' => null,
        'WorkspaceImageId' => null,
    ];
}
