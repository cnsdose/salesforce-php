<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 2019-02-06
 * Time: 15:13
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class Contact
 * @package CNSDose\Salesforce\Models\Sales
 *
 * @method Contact[] query()
 *
 * @property mixed Id
 * @property mixed IsDeleted
 * @property mixed MasterRecordId
 * @property mixed AccountId
 * @property mixed LastName
 * @property mixed FirstName
 * @property mixed Salutation
 * @property mixed Name
 * @property mixed OtherStreet
 * @property mixed OtherCity
 * @property mixed OtherState
 * @property mixed OtherPostalCode
 * @property mixed OtherCountry
 * @property mixed OtherLatitude
 * @property mixed OtherLongitude
 * @property mixed OtherGeocodeAccuracy
 * @property mixed OtherAddress
 * @property mixed MailingStreet
 * @property mixed MailingCity
 * @property mixed MailingState
 * @property mixed MailingPostalCode
 * @property mixed MailingCountry
 * @property mixed MailingLatitude
 * @property mixed MailingLongitude
 * @property mixed MailingGeocodeAccuracy
 * @property mixed MailingAddress
 * @property mixed Phone
 * @property mixed Fax
 * @property mixed MobilePhone
 * @property mixed HomePhone
 * @property mixed OtherPhone
 * @property mixed AssistantPhone
 * @property mixed ReportsToId
 * @property mixed Email
 * @property mixed Title
 * @property mixed Department
 * @property mixed AssistantName
 * @property mixed LeadSource
 * @property \Carbon\Carbon Birthdate
 * @property mixed Description
 * @property mixed CurrencyIsoCode
 * @property mixed OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property mixed CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property mixed LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastActivityDate
 * @property \Carbon\Carbon LastCURequestDate
 * @property \Carbon\Carbon LastCUUpdateDate
 */
class Contact extends BaseModel
{
    protected static $objectApiName = 'Contact';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => null,
        'MasterRecordId' => null,
        'AccountId' => null,
        'LastName' => null,
        'FirstName' => null,
        'Salutation' => null,
        'Name' => null,
        'OtherStreet' => null,
        'OtherCity' => null,
        'OtherState' => null,
        'OtherPostalCode' => null,
        'OtherCountry' => null,
        'OtherLatitude' => null,
        'OtherLongitude' => null,
        'OtherGeocodeAccuracy' => null,
        'OtherAddress' => null,
        'MailingStreet' => null,
        'MailingCity' => null,
        'MailingState' => null,
        'MailingPostalCode' => null,
        'MailingCountry' => null,
        'MailingLatitude' => null,
        'MailingLongitude' => null,
        'MailingGeocodeAccuracy' => null,
        'MailingAddress' => null,
        'Phone' => null,
        'Fax' => null,
        'MobilePhone' => null,
        'HomePhone' => null,
        'OtherPhone' => null,
        'AssistantPhone' => null,
        'ReportsToId' => null,
        'Email' => null,
        'Title' => null,
        'Department' => null,
        'AssistantName' => null,
        'LeadSource' => null,
        'Birthdate' => 'date',
        'Description' => null,
        'CurrencyIsoCode' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'datetime',
        'LastCURequestDate' => 'datetime',
        'LastCUUpdateDate' => 'datetime',
    ];
}
