<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityLineItem[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
 * @property mixed $SortOrder
 * @property string $PricebookEntryId
 * @property string $Product2Id
 * @property string $ProductCode
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property float $Quantity
 * @property mixed $Discount
 * @property float $TotalPrice
 * @property float $UnitPrice
 * @property float $ListPrice
 * @property \Carbon\Carbon $ServiceDate
 * @property string $Description
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class OpportunityLineItem extends BaseRecordModel
{
    protected static $objectApiName = 'OpportunityLineItem';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
        'SortOrder' => null,
        'PricebookEntryId' => null,
        'Product2Id' => null,
        'ProductCode' => null,
        'Name' => null,
        'CurrencyIsoCode' => null,
        'Quantity' => 'number:10,2',
        'Discount' => null,
        'TotalPrice' => 'number:16,2',
        'UnitPrice' => 'number:16,2',
        'ListPrice' => 'number:16,2',
        'ServiceDate' => 'date',
        'Description' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
