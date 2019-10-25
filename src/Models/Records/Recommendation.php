<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Recommendation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Recommendation[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ActionReference
 * @property string $Description
 * @property string $ImageId
 * @property string $AcceptanceLabel
 * @property string $RejectionLabel
 * @property bool $IsActionActive
 * @property string $ExternalId
 */
class Recommendation extends BaseRecordModel
{
    public static $objectApiName = 'Recommendation';
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
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ActionReference' => null,
        'Description' => null,
        'ImageId' => null,
        'AcceptanceLabel' => null,
        'RejectionLabel' => null,
        'IsActionActive' => 'bool',
        'ExternalId' => null,
    ];
}
