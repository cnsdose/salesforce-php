<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContentVersionComment
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContentVersionComment[] query()
 *
 * @property string $Id
 * @property string $ContentDocumentId
 * @property string $ContentVersionId
 * @property string $UserComment
 * @property \Carbon\Carbon $CreatedDate
 */
class ContentVersionComment extends BaseRecordModel
{
    protected static $objectApiName = 'ContentVersionComment';
    protected $defaultFields = [
        'Id' => null,
        'ContentDocumentId' => null,
        'ContentVersionId' => null,
        'UserComment' => null,
        'CreatedDate' => 'datetime',
    ];
}
