<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContractLineItem
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContractLineItem[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $LineItemNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ServiceContractId
 * @property string $Product2Id
 * @property string $AssetId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $Description
 * @property string $PricebookEntryId
 * @property float $Quantity
 * @property float $UnitPrice
 * @property mixed $Discount
 * @property float $ListPrice
 * @property float $Subtotal
 * @property float $TotalPrice
 * @property mixed $Status
 * @property string $ParentContractLineItemId
 * @property string $RootContractLineItemId
 */
class ContractLineItem extends BaseRecordModel
{
    protected static $objectApiName = 'ContractLineItem';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'LineItemNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceContractId' => null,
        'Product2Id' => null,
        'AssetId' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'Description' => null,
        'PricebookEntryId' => null,
        'Quantity' => 'number:10,2',
        'UnitPrice' => 'number:16,2',
        'Discount' => null,
        'ListPrice' => 'number:16,2',
        'Subtotal' => 'number:16,2',
        'TotalPrice' => 'number:16,2',
        'Status' => null,
        'ParentContractLineItemId' => null,
        'RootContractLineItemId' => null,
    ];
}
