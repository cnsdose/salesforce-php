<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ListEmail
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ListEmail[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $Subject
 * @property string $HtmlBody
 * @property string $TextBody
 * @property string $FromName
 * @property string $FromAddress
 * @property mixed $Status
 * @property bool $HasAttachment
 * @property \Carbon\Carbon $ScheduledDate
 * @property mixed $TotalSent
 * @property string $CampaignId
 * @property bool $IsTracked
 */
class ListEmail extends BaseRecordModel
{
    protected static $objectApiName = 'ListEmail';
    protected $defaultFields = [
        'Id' => null,
        'OwnerId' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'Subject' => null,
        'HtmlBody' => null,
        'TextBody' => null,
        'FromName' => null,
        'FromAddress' => null,
        'Status' => null,
        'HasAttachment' => 'bool',
        'ScheduledDate' => 'datetime',
        'TotalSent' => null,
        'CampaignId' => null,
        'IsTracked' => 'bool',
    ];
}
