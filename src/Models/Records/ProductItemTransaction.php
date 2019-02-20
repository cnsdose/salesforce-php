<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ProductItemTransaction
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ProductItemTransaction[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ProductItemTransactionNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ProductItemId
 * @property string $RelatedRecordId
 * @property mixed $TransactionType
 * @property string $Description
 * @property float $Quantity
 */
class ProductItemTransaction extends BaseRecordModel
{
    public static $objectApiName = 'ProductItemTransaction';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ProductItemTransactionNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ProductItemId' => null,
        'RelatedRecordId' => null,
        'TransactionType' => null,
        'Description' => null,
        'Quantity' => 'number:16,2',
    ];
}
