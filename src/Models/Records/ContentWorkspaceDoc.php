<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentWorkspaceDoc
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentWorkspaceDoc[] query()
 *
 * @property string Id
 * @property string ContentWorkspaceId
 * @property string ContentDocumentId
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsOwner
 * @property bool IsDeleted
 */
class ContentWorkspaceDoc extends BaseRecordModel
{
    protected static $objectApiName = 'ContentWorkspaceDoc';
    protected $defaultFields = [
        'Id' => null,
        'ContentWorkspaceId' => null,
        'ContentDocumentId' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'IsOwner' => 'bool',
        'IsDeleted' => 'bool',
    ];
}
