<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentFolderLink
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentFolderLink[] query()
 *
 * @property string $Id
 * @property string $ParentEntityId
 * @property string $ContentFolderId
 * @property bool $IsDeleted
 * @property mixed $EnableFolderStatus
 */
class ContentFolderLink extends BaseRecordModel
{
    protected static $objectApiName = 'ContentFolderLink';
    protected $defaultFields = [
        'Id' => null,
        'ParentEntityId' => null,
        'ContentFolderId' => null,
        'IsDeleted' => 'bool',
        'EnableFolderStatus' => null,
    ];
}
