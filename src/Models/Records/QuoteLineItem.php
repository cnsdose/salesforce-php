<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class QuoteLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method QuoteLineItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LineNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $QuoteId
 * @property string $PricebookEntryId
 * @property string $OpportunityLineItemId
 * @property float $Quantity
 * @property float $UnitPrice
 * @property mixed $Discount
 * @property string $Description
 * @property \Carbon\Carbon $ServiceDate
 * @property string $Product2Id
 * @property mixed $SortOrder
 * @property float $ListPrice
 * @property float $Subtotal
 * @property float $TotalPrice
 */
class QuoteLineItem extends BaseRecordModel
{
    public static $objectApiName = 'QuoteLineItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LineNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'QuoteId' => null,
        'PricebookEntryId' => null,
        'OpportunityLineItemId' => null,
        'Quantity' => 'number:10,2',
        'UnitPrice' => 'number:16,2',
        'Discount' => null,
        'Description' => null,
        'ServiceDate' => 'date',
        'Product2Id' => null,
        'SortOrder' => null,
        'ListPrice' => 'number:16,2',
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
    ];
}
