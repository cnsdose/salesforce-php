<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceTerritoryLocation
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceTerritoryLocation[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceTerritoryLocationNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $ServiceTerritoryId
 * @property string $LocationId
 */
class ServiceTerritoryLocation extends BaseRecordModel
{
    public static $objectApiName = 'ServiceTerritoryLocation';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceTerritoryLocationNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ServiceTerritoryId' => null,
        'LocationId' => null,
    ];
}
