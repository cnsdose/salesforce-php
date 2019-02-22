<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Tests\Models;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Apple
 * @package CNSDose\Salesforce\Tests\Models
 *
 * @method Apple[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property string $TreeId__c
 */
class Apple extends BaseRecordModel
{
    public static $objectApiName = 'SalesforcePHPTestApple__c';
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
        'TreeId__c' => null,
    ];
}
