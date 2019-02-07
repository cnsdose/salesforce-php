<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 7/02/19
 * Time: 6:48 PM
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class SupportCase
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method SupportCase[] query()
 *
 * @property mixed Id
 * @property mixed IsDeleted
 * @property mixed CaseNumber
 * @property mixed ContactId
 * @property mixed AccountId
 * @property mixed AssetId
 * @property mixed SourceId
 * @property mixed ParentId
 * @property mixed SuppliedName
 * @property mixed SuppliedEmail
 * @property mixed SuppliedPhone
 * @property mixed SuppliedCompany
 * @property mixed Type
 * @property mixed Status
 * @property mixed Reason
 * @property mixed Origin
 * @property mixed Subject
 * @property mixed Priority
 * @property mixed Description
 * @property mixed IsClosed
 * @property \Carbon\Carbon ClosedDate
 * @property mixed IsEscalated
 * @property mixed CurrencyIsoCode
 * @property mixed OwnerId
 * @property \Carbon\Carbon CreatedDate
 * @property mixed CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property mixed LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed ContactPhone
 * @property mixed ContactMobile
 * @property mixed ContactEmail
 * @property mixed ContactFax
 * @property mixed Comments
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 */
class SupportCase extends BaseModel
{
    protected static $objectApiName = 'Case';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => null,
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
        'IsClosed' => null,
        'ClosedDate' => 'datetime',
        'IsEscalated' => null,
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
