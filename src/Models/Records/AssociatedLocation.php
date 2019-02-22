<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class AssociatedLocation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method AssociatedLocation[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $AssociatedLocationNumber
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ParentRecordId
 * @property string $LocationId
 * @property string $Type
 * @property \Carbon\Carbon $ActiveFrom
 * @property \Carbon\Carbon $ActiveTo
 */
class AssociatedLocation extends BaseRecordModel
{
    public static $objectApiName = 'AssociatedLocation';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'AssociatedLocationNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ParentRecordId' => null,
        'LocationId' => null,
        'Type' => null,
        'ActiveFrom' => 'datetime',
        'ActiveTo' => 'datetime',
    ];
}
