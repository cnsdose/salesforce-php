<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CampaignMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CampaignMember[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $CampaignId
 * @property string $LeadId
 * @property string $ContactId
 * @property mixed $Status
 * @property bool $HasResponded
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $FirstRespondedDate
 * @property mixed $CurrencyIsoCode
 * @property mixed $Salutation
 * @property string $Name
 * @property string $FirstName
 * @property string $LastName
 * @property string $Title
 * @property string $Street
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property mixed $Email
 * @property mixed $Phone
 * @property mixed $Fax
 * @property mixed $MobilePhone
 * @property string $Description
 * @property bool $DoNotCall
 * @property bool $HasOptedOutOfEmail
 * @property bool $HasOptedOutOfFax
 * @property mixed $LeadSource
 * @property string $CompanyOrAccount
 * @property string $Type
 * @property string $LeadOrContactId
 * @property string $LeadOrContactOwnerId
 */
class CampaignMember extends BaseRecordModel
{
    public static $objectApiName = 'CampaignMember';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CampaignId' => null,
        'LeadId' => null,
        'ContactId' => null,
        'Status' => null,
        'HasResponded' => 'bool',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'FirstRespondedDate' => 'date',
        'CurrencyIsoCode' => null,
        'Salutation' => null,
        'Name' => null,
        'FirstName' => null,
        'LastName' => null,
        'Title' => null,
        'Street' => null,
        'City' => null,
        'State' => null,
        'PostalCode' => null,
        'Country' => null,
        'Email' => null,
        'Phone' => null,
        'Fax' => null,
        'MobilePhone' => null,
        'Description' => null,
        'DoNotCall' => 'bool',
        'HasOptedOutOfEmail' => 'bool',
        'HasOptedOutOfFax' => 'bool',
        'LeadSource' => null,
        'CompanyOrAccount' => null,
        'Type' => null,
        'LeadOrContactId' => null,
        'LeadOrContactOwnerId' => null,
    ];
}
