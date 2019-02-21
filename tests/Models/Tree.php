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
    ];
}
