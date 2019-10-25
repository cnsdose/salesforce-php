<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Contact
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Contact[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $MasterRecordId
 * @property string $AccountId
 * @property string $LastName
 * @property string $FirstName
 * @property string $Salutation
 * @property string $MiddleName
 * @property string $Suffix
 * @property string $Name
 * @property string $MailingStreet
 * @property string $MailingCity
 * @property string $MailingState
 * @property string $MailingPostalCode
 * @property string $MailingCountry
 * @property float $MailingLatitude
 * @property float $MailingLongitude
 * @property string $MailingGeocodeAccuracy
 * @property mixed $MailingAddress
 * @property mixed $Phone
 * @property mixed $Fax
 * @property mixed $MobilePhone
 * @property string $ReportsToId
 * @property mixed $Email
 * @property string $Title
 * @property string $Department
 * @property string $CurrencyIsoCode
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastCURequestDate
 * @property \Carbon\Carbon $LastCUUpdateDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $EmailBouncedReason
 * @property \Carbon\Carbon $EmailBouncedDate
 * @property bool $IsEmailBounced
 * @property mixed $PhotoUrl
 * @property string $Jigsaw
 * @property string $JigsawContactId
 * @property string $IndividualId
 */
class Contact extends BaseRecordModel
{
    public static $objectApiName = 'Contact';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'MasterRecordId' => null,
        'AccountId' => null,
        'LastName' => null,
        'FirstName' => null,
        'Salutation' => null,
        'MiddleName' => null,
        'Suffix' => null,
        'Name' => null,
        'MailingStreet' => null,
        'MailingCity' => null,
        'MailingState' => null,
        'MailingPostalCode' => null,
        'MailingCountry' => null,
        'MailingLatitude' => 'number:3,15',
        'MailingLongitude' => 'number:3,15',
        'MailingGeocodeAccuracy' => null,
        'MailingAddress' => null,
        'Phone' => null,
        'Fax' => null,
        'MobilePhone' => null,
        'ReportsToId' => null,
        'Email' => null,
        'Title' => null,
        'Department' => null,
        'CurrencyIsoCode' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastCURequestDate' => 'datetime',
        'LastCUUpdateDate' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'EmailBouncedReason' => null,
        'EmailBouncedDate' => 'datetime',
        'IsEmailBounced' => 'bool',
        'PhotoUrl' => null,
        'Jigsaw' => null,
        'JigsawContactId' => null,
        'IndividualId' => null,
    ];
}
