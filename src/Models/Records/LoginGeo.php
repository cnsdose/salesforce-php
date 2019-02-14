<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class LoginGeo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method LoginGeo[] query()
 *
 * @property string Id
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property bool IsDeleted
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LoginTime
 * @property string CountryIso
 * @property string Country
 * @property float Latitude
 * @property float Longitude
 * @property string City
 * @property string PostalCode
 * @property string Subdivision
 */
class LoginGeo extends BaseRecordModel
{
    protected static $objectApiName = 'LoginGeo';
    protected $defaultFields = [
        'Id' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'IsDeleted' => 'bool',
        'SystemModstamp' => 'datetime',
        'LoginTime' => 'datetime',
        'CountryIso' => null,
        'Country' => null,
        'Latitude' => 'number:18,0',
        'Longitude' => 'number:18,0',
        'City' => null,
        'PostalCode' => null,
        'Subdivision' => null,
    ];
}
