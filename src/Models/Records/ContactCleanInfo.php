<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ContactCleanInfo
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ContactCleanInfo[] query()
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
 * @property string $ContactId
 * @property \Carbon\Carbon $LastMatchedDate
 * @property \Carbon\Carbon $LastStatusChangedDate
 * @property string $LastStatusChangedById
 * @property bool $IsInactive
 * @property string $FirstName
 * @property string $LastName
 * @property mixed $Email
 * @property mixed $Phone
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property mixed $GeocodeAccuracy
 * @property mixed $Address
 * @property string $Title
 * @property mixed $ContactStatusDataDotCom
 * @property bool $IsReviewedName
 * @property bool $IsReviewedEmail
 * @property bool $IsReviewedPhone
 * @property bool $IsReviewedAddress
 * @property bool $IsReviewedTitle
 * @property bool $IsDifferentFirstName
 * @property bool $IsDifferentLastName
 * @property bool $IsDifferentEmail
 * @property bool $IsDifferentPhone
 * @property bool $IsDifferentStreet
 * @property bool $IsDifferentCity
 * @property bool $IsDifferentState
 * @property bool $IsDifferentPostalCode
 * @property bool $IsDifferentCountry
 * @property bool $IsDifferentTitle
 * @property bool $IsDifferentStateCode
 * @property bool $IsDifferentCountryCode
 * @property bool $CleanedByJob
 * @property bool $CleanedByUser
 * @property bool $IsFlaggedWrongName
 * @property bool $IsFlaggedWrongEmail
 * @property bool $IsFlaggedWrongPhone
 * @property bool $IsFlaggedWrongAddress
 * @property bool $IsFlaggedWrongTitle
 * @property string $DataDotComId
 */
class ContactCleanInfo extends BaseRecordModel
{
    protected static $objectApiName = 'ContactCleanInfo';
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
        'ContactId' => null,
        'LastMatchedDate' => 'datetime',
        'LastStatusChangedDate' => 'datetime',
        'LastStatusChangedById' => null,
        'IsInactive' => 'bool',
        'FirstName' => null,
        'LastName' => null,
        'Email' => null,
        'Phone' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Title' => null,
        'ContactStatusDataDotCom' => null,
        'IsReviewedName' => 'bool',
        'IsReviewedEmail' => 'bool',
        'IsReviewedPhone' => 'bool',
        'IsReviewedAddress' => 'bool',
        'IsReviewedTitle' => 'bool',
        'IsDifferentFirstName' => 'bool',
        'IsDifferentLastName' => 'bool',
        'IsDifferentEmail' => 'bool',
        'IsDifferentPhone' => 'bool',
        'IsDifferentStreet' => 'bool',
        'IsDifferentCity' => 'bool',
        'IsDifferentState' => 'bool',
        'IsDifferentPostalCode' => 'bool',
        'IsDifferentCountry' => 'bool',
        'IsDifferentTitle' => 'bool',
        'IsDifferentStateCode' => 'bool',
        'IsDifferentCountryCode' => 'bool',
        'CleanedByJob' => 'bool',
        'CleanedByUser' => 'bool',
        'IsFlaggedWrongName' => 'bool',
        'IsFlaggedWrongEmail' => 'bool',
        'IsFlaggedWrongPhone' => 'bool',
        'IsFlaggedWrongAddress' => 'bool',
        'IsFlaggedWrongTitle' => 'bool',
        'DataDotComId' => null,
    ];
}
