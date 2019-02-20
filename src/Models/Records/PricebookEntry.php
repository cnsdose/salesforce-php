<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class PricebookEntry
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method PricebookEntry[] query()
 *
 * @property string $Id
 * @property string $Name
 * @property string $Pricebook2Id
 * @property string $Product2Id
 * @property mixed $CurrencyIsoCode
 * @property float $UnitPrice
 * @property bool $IsActive
 * @property bool $UseStandardPrice
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ProductCode
 * @property bool $IsDeleted
 * @property bool $IsArchived
 */
class PricebookEntry extends BaseRecordModel
{
    public static $objectApiName = 'PricebookEntry';
    protected $defaultFields = [
        'Id' => null,
        'Name' => null,
        'Pricebook2Id' => null,
        'Product2Id' => null,
        'CurrencyIsoCode' => null,
        'UnitPrice' => 'number:16,2',
        'IsActive' => 'bool',
        'UseStandardPrice' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ProductCode' => null,
        'IsDeleted' => 'bool',
        'IsArchived' => 'bool',
    ];
}
