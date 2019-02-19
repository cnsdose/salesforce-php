<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class Solution
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method Solution[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SolutionNumber
 * @property string $SolutionName
 * @property bool $IsPublished
 * @property bool $IsPublishedInPublicKb
 * @property mixed $Status
 * @property bool $IsReviewed
 * @property string $SolutionNote
 * @property string $OwnerId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property mixed $TimesUsed
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property bool $IsHtml
 */
class Solution extends BaseRecordModel
{
    protected static $objectApiName = 'Solution';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SolutionNumber' => null,
        'SolutionName' => null,
        'IsPublished' => 'bool',
        'IsPublishedInPublicKb' => 'bool',
        'Status' => null,
        'IsReviewed' => 'bool',
        'SolutionNote' => null,
        'OwnerId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'TimesUsed' => null,
        'CurrencyIsoCode' => null,
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'IsHtml' => 'bool',
    ];
}
