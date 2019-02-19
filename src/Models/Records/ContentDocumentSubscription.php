<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentDocumentSubscription
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentDocumentSubscription[] query()
 *
 * @property string $Id
 * @property string $UserId
 * @property string $ContentDocumentId
 * @property bool $IsCommentSub
 * @property bool $IsDocumentSub
 */
class ContentDocumentSubscription extends BaseRecordModel
{
    protected static $objectApiName = 'ContentDocumentSubscription';
    protected $defaultFields = [
        'Id' => null,
        'UserId' => null,
        'ContentDocumentId' => null,
        'IsCommentSub' => 'bool',
        'IsDocumentSub' => 'bool',
    ];
}
