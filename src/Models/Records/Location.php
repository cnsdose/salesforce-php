<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Location
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Location[] query()
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
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property mixed $LocationType
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $Location
 * @property string $Description
 * @property string $DrivingDirections
 * @property mixed $TimeZone
 * @property string $ParentLocationId
 * @property \Carbon\Carbon $PossessionDate
 * @property \Carbon\Carbon $ConstructionStartDate
 * @property \Carbon\Carbon $ConstructionEndDate
 * @property \Carbon\Carbon $OpenDate
 * @property \Carbon\Carbon $CloseDate
 * @property \Carbon\Carbon $RemodelStartDate
 * @property \Carbon\Carbon $RemodelEndDate
 * @property bool $IsMobile
 * @property bool $IsInventoryLocation
 * @property string $VisitorAddressId
 * @property string $RootLocationId
 * @property mixed $LocationLevel
 */
class Location extends BaseRecordModel
{
    protected static $objectApiName = 'Location';
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
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'LocationType' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'Location' => null,
        'Description' => null,
        'DrivingDirections' => null,
        'TimeZone' => null,
        'ParentLocationId' => null,
        'PossessionDate' => 'date',
        'ConstructionStartDate' => 'date',
        'ConstructionEndDate' => 'date',
        'OpenDate' => 'date',
        'CloseDate' => 'date',
        'RemodelStartDate' => 'date',
        'RemodelEndDate' => 'date',
        'IsMobile' => 'bool',
        'IsInventoryLocation' => 'bool',
        'VisitorAddressId' => null,
        'RootLocationId' => null,
        'LocationLevel' => null,
    ];
}
