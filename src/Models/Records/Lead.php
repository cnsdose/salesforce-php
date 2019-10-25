<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Lead
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Lead[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MasterRecordId
 * @property string $LastName
 * @property string $FirstName
 * @property string $Salutation
 * @property string $MiddleName
 * @property string $Suffix
 * @property string $Name
 * @property string $Title
 * @property string $Company
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property float $Latitude
 * @property float $Longitude
 * @property string $GeocodeAccuracy
 * @property mixed $Address
 * @property mixed $Phone
 * @property mixed $MobilePhone
 * @property mixed $Email
 * @property mixed $Website
 * @property mixed $PhotoUrl
 * @property string $LeadSource
 * @property string $Status
 * @property string $Industry
 * @property string $Rating
 * @property string $CurrencyIsoCode
 * @property mixed $NumberOfEmployees
 * @property string $OwnerId
 * @property bool $IsConverted
 * @property \Carbon\Carbon $ConvertedDate
 * @property string $ConvertedAccountId
 * @property string $ConvertedContactId
 * @property string $ConvertedOpportunityId
 * @property bool $IsUnreadByOwner
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Jigsaw
 * @property string $JigsawContactId
 * @property string $EmailBouncedReason
 * @property \Carbon\Carbon $EmailBouncedDate
 * @property string $IndividualId
 */
class Lead extends BaseRecordModel
{
    public static $objectApiName = 'Lead';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MasterRecordId' => null,
        'LastName' => null,
        'FirstName' => null,
        'Salutation' => null,
        'MiddleName' => null,
        'Suffix' => null,
        'Name' => null,
        'Title' => null,
        'Company' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Latitude' => 'number:3,15',
        'Longitude' => 'number:3,15',
        'GeocodeAccuracy' => null,
        'Address' => null,
        'Phone' => null,
        'MobilePhone' => null,
        'Email' => null,
        'Website' => null,
        'PhotoUrl' => null,
        'LeadSource' => null,
        'Status' => null,
        'Industry' => null,
        'Rating' => null,
        'CurrencyIsoCode' => null,
        'NumberOfEmployees' => null,
        'OwnerId' => null,
        'IsConverted' => 'bool',
        'ConvertedDate' => 'date',
        'ConvertedAccountId' => null,
        'ConvertedContactId' => null,
        'ConvertedOpportunityId' => null,
        'IsUnreadByOwner' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Jigsaw' => null,
        'JigsawContactId' => null,
        'EmailBouncedReason' => null,
        'EmailBouncedDate' => 'datetime',
        'IndividualId' => null,
    ];
}
