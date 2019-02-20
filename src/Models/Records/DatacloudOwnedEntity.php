<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DatacloudOwnedEntity
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DatacloudOwnedEntity[] query()
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
 * @property string $DataDotComKey
 * @property mixed $DatacloudEntityType
 * @property string $UserId
 * @property string $PurchaseUsageId
 * @property mixed $PurchaseType
 */
class DatacloudOwnedEntity extends BaseRecordModel
{
    public static $objectApiName = 'DatacloudOwnedEntity';
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
        'DataDotComKey' => null,
        'DatacloudEntityType' => null,
        'UserId' => null,
        'PurchaseUsageId' => null,
        'PurchaseType' => null,
    ];
}
