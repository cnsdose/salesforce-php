<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Tests\Models;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Tree
 * @package CNSDose\Salesforce\Tests\Models
 *
 * @method Tree[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property bool $IsAlive__c
 * @property \Carbon\Carbon $PlantDate__c
 * @property \Carbon\Carbon $PlantTime__c
 * @property \Carbon\Carbon $PlantDateTime__c
 * @property float $Price__c
 */
class Tree extends BaseRecordModel
{
    public static $objectApiName = 'SalesforcePHPTestTree__c';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'IsAlive__c' => 'bool',
        'PlantDate__c' => 'date',
        'PlantTime__c' => 'time',
        'PlantDateTime__c' => 'datetime',
        'Price__c' => 'number:8,2',
    ];
}
