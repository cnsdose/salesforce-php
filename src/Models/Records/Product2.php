<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Product2
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Product2[] query()
 *
 * @property string Id
 * @property string Name
 * @property string ProductCode
 * @property string Description
 * @property bool IsActive
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed Family
 * @property mixed CurrencyIsoCode
 * @property string ExternalDataSourceId
 * @property string ExternalId
 * @property mixed DisplayUrl
 * @property mixed QuantityUnitOfMeasure
 * @property bool IsDeleted
 * @property bool IsArchived
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string StockKeepingUnit
 */
class Product2 extends BaseRecordModel
{
    protected static $objectApiName = 'Product2';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'ProductCode' => null,
        'Description' => null,
        'IsActive' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'Family' => null,
        'CurrencyIsoCode' => null,
        'ExternalDataSourceId' => null,
        'ExternalId' => null,
        'DisplayUrl' => null,
        'QuantityUnitOfMeasure' => null,
        'IsDeleted' => 'bool',
        'IsArchived' => 'bool',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'StockKeepingUnit' => null,
    ];
}
