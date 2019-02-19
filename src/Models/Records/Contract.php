<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Contract
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Contract[] query()
 *
 * @property string $Id
 * @property string $AccountId
 * @property mixed $CurrencyIsoCode
 * @property string $Pricebook2Id
 * @property mixed $OwnerExpirationNotice
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property string $BillingStreet
 * @property string $BillingCity
 * @property string $BillingState
 * @property string $BillingPostalCode
 * @property string $BillingCountry
 * @property float $BillingLatitude
 * @property float $BillingLongitude
 * @property mixed $BillingGeocodeAccuracy
 * @property mixed $BillingAddress
 * @property mixed $ContractTerm
 * @property string $OwnerId
 * @property mixed $Status
 * @property string $CompanySignedId
 * @property \Carbon\Carbon $CompanySignedDate
 * @property string $CustomerSignedId
 * @property string $CustomerSignedTitle
 * @property \Carbon\Carbon $CustomerSignedDate
 * @property string $SpecialTerms
 * @property string $ActivatedById
 * @property \Carbon\Carbon $ActivatedDate
 * @property mixed $StatusCode
 * @property string $Description
 * @property bool $IsDeleted
 * @property string $ContractNumber
 * @property \Carbon\Carbon $LastApprovedDate
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastActivityDate
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 */
class Contract extends BaseRecordModel
{
    protected static $objectApiName = 'Contract';
    protected $defaultFields = [
        'Id' => null,
        'AccountId' => null,
        'CurrencyIsoCode' => null,
        'Pricebook2Id' => null,
        'OwnerExpirationNotice' => null,
        'StartDate' => 'date',
        'EndDate' => 'date',
        'BillingStreet' => null,
        'BillingCity' => null,
        'BillingState' => null,
        'BillingPostalCode' => null,
        'BillingCountry' => null,
        'BillingLatitude' => 'number:3,15',
        'BillingLongitude' => 'number:3,15',
        'BillingGeocodeAccuracy' => null,
        'BillingAddress' => null,
        'ContractTerm' => null,
        'OwnerId' => null,
        'Status' => null,
        'CompanySignedId' => null,
        'CompanySignedDate' => 'date',
        'CustomerSignedId' => null,
        'CustomerSignedTitle' => null,
        'CustomerSignedDate' => 'date',
        'SpecialTerms' => null,
        'ActivatedById' => null,
        'ActivatedDate' => 'datetime',
        'StatusCode' => null,
        'Description' => null,
        'IsDeleted' => 'bool',
        'ContractNumber' => null,
        'LastApprovedDate' => 'datetime',
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastActivityDate' => 'date',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
