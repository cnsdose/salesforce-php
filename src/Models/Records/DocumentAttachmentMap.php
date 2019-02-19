<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DocumentAttachmentMap
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DocumentAttachmentMap[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $DocumentId
 * @property mixed $DocumentSequence
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 */
class DocumentAttachmentMap extends BaseRecordModel
{
    protected static $objectApiName = 'DocumentAttachmentMap';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'DocumentId' => null,
        'DocumentSequence' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
    ];
}
