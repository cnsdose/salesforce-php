<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class SupportCase
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method SupportCase[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string CaseNumber
 * @property string ContactId
 * @property string AccountId
 * @property string AssetId
 * @property string SourceId
 * @property string ParentId
 * @property string SuppliedName
 * @property mixed SuppliedEmail
 * @property string SuppliedPhone
 * @property string SuppliedCompany
 * @property mixed Type
 * @property mixed Status
 * @property mixed Reason
 * @property mixed Origin
 * @property string Subject
 * @property mixed Priority
 * @property string Description
 * @property bool IsClosed
 * @property \Carbon\Carbon ClosedDate
 * @property bool IsEscalated
 * @property mixed CurrencyIsoCode
 * @property string OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed ContactPhone
 * @property mixed ContactMobile
 * @property mixed ContactEmail
 * @property mixed ContactFax
 * @property string Comments
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 */
class SupportCase extends BaseModel
{
    protected static $objectApiName = 'Case';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'CaseNumber' => null,
        'ContactId' => null,
        'AccountId' => null,
        'AssetId' => null,
        'SourceId' => null,
        'ParentId' => null,
        'SuppliedName' => null,
        'SuppliedEmail' => null,
        'SuppliedPhone' => null,
        'SuppliedCompany' => null,
        'Type' => null,
        'Status' => null,
        'Reason' => null,
        'Origin' => null,
        'Subject' => null,
        'Priority' => null,
        'Description' => null,
        'IsClosed' => 'bool',
        'ClosedDate' => 'datetime',
        'IsEscalated' => 'bool',
        'CurrencyIsoCode' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'ContactPhone' => null,
        'ContactMobile' => null,
        'ContactEmail' => null,
        'ContactFax' => null,
        'Comments' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
    ];
}
