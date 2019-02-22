<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DigitalSignature
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DigitalSignature[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $DigitalSignatureNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ParentId
 * @property string $DocumentName
 * @property string $DocumentContentType
 * @property mixed $DocumentLength
 * @property mixed $DocumentBody
 * @property string $SignedBy
 * @property string $Place
 * @property \Carbon\Carbon $SignedDate
 * @property string $SignatureType
 */
class DigitalSignature extends BaseRecordModel
{
    public static $objectApiName = 'DigitalSignature';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'DigitalSignatureNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ParentId' => null,
        'DocumentName' => null,
        'DocumentContentType' => null,
        'DocumentLength' => null,
        'DocumentBody' => null,
        'SignedBy' => null,
        'Place' => null,
        'SignedDate' => 'datetime',
        'SignatureType' => null,
    ];
}
