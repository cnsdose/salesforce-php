<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class QuoteDocument
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method QuoteDocument[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $QuoteId
 * @property string $ContentVersionDocumentId
 * @property mixed $Document
 * @property string $CurrencyIsoCode
 * @property float $GrandTotal
 * @property mixed $Discount
 * @property bool $IsDeleted
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class QuoteDocument extends BaseRecordModel
{
    public static $objectApiName = 'QuoteDocument';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'QuoteId' => null,
        'ContentVersionDocumentId' => null,
        'Document' => null,
        'CurrencyIsoCode' => null,
        'GrandTotal' => 'number:16,2',
        'Discount' => null,
        'IsDeleted' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
