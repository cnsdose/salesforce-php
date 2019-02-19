<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatacloudPurchaseUsage
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatacloudPurchaseUsage[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $UserId
 * @property mixed $UserType
 * @property mixed $PurchaseType
 * @property mixed $DatacloudEntityType
 * @property float $Usage
 * @property string $Description
 */
class DatacloudPurchaseUsage extends BaseRecordModel
{
    protected static $objectApiName = 'DatacloudPurchaseUsage';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'UserId' => null,
        'UserType' => null,
        'PurchaseType' => null,
        'DatacloudEntityType' => null,
        'Usage' => 'number:18,0',
        'Description' => null,
    ];
}
