<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Asset
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Asset[] query()
 *
 * @property string Id
 * @property string ContactId
 * @property string AccountId
 * @property string ParentId
 * @property string RootAssetId
 * @property string Product2Id
 * @property string ProductCode
 * @property bool IsCompetitorProduct
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 * @property mixed CurrencyIsoCode
 * @property string Name
 * @property string SerialNumber
 * @property \Carbon\Carbon InstallDate
 * @property \Carbon\Carbon PurchaseDate
 * @property \Carbon\Carbon UsageEndDate
 * @property mixed Status
 * @property float Price
 * @property float Quantity
 * @property string Description
 * @property string OwnerId
 * @property string LocationId
 * @property string AssetProvidedById
 * @property string AssetServicedById
 * @property bool IsInternal
 * @property mixed AssetLevel
 * @property string StockKeepingUnit
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 */
class Asset extends BaseRecordModel
{
    protected static $objectApiName = 'Asset';
    protected $defaultFields = [
        'Id' => null,
        'ContactId' => null,
        'AccountId' => null,
        'ParentId' => null,
        'RootAssetId' => null,
        'Product2Id' => null,
        'ProductCode' => null,
        'IsCompetitorProduct' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
        'CurrencyIsoCode' => null,
        'Name' => null,
        'SerialNumber' => null,
        'InstallDate' => 'date',
        'PurchaseDate' => 'date',
        'UsageEndDate' => 'date',
        'Status' => null,
        'Price' => 'number:18,0',
        'Quantity' => 'number:10,2',
        'Description' => null,
        'OwnerId' => null,
        'LocationId' => null,
        'AssetProvidedById' => null,
        'AssetServicedById' => null,
        'IsInternal' => 'bool',
        'AssetLevel' => null,
        'StockKeepingUnit' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
