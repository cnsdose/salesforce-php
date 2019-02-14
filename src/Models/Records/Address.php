<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Address
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Address[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string ParentId
 * @property mixed LocationType
 * @property mixed AddressType
 * @property string Street
 * @property string City
 * @property string State
 * @property string PostalCode
 * @property string Country
 * @property float Latitude
 * @property float Longitude
 * @property mixed GeocodeAccuracy
 * @property mixed Address
 * @property string Description
 * @property string DrivingDirections
 * @property mixed TimeZone
 */
class Address extends BaseRecordModel
{
    protected static $objectApiName = 'Address';
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
        'ParentId' => null,
        'LocationType' => null,
        'AddressType' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Description' => null,
        'DrivingDirections' => null,
        'TimeZone' => null,
    ];
}
