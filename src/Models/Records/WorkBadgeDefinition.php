<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class WorkBadgeDefinition
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method WorkBadgeDefinition[] query()
 *
 * @property string $Id
 * @property string $OwnerId
 * @property bool $IsDeleted
 * @property string $Name
 * @property string $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property bool $IsCompanyWide
 * @property string $Description
 * @property mixed $ImageUrl
 * @property bool $IsActive
 * @property mixed $LimitNumber
 * @property bool $IsLimitPerUser
 * @property \Carbon\Carbon $LimitStartDate
 * @property mixed $GivenBadgeCount
 * @property bool $IsRewardBadge
 */
class WorkBadgeDefinition extends BaseRecordModel
{
    public static $objectApiName = 'WorkBadgeDefinition';
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
        'IsCompanyWide' => 'bool',
        'Description' => null,
        'ImageUrl' => null,
        'IsActive' => 'bool',
        'LimitNumber' => null,
        'IsLimitPerUser' => 'bool',
        'LimitStartDate' => 'date',
        'GivenBadgeCount' => null,
        'IsRewardBadge' => 'bool',
    ];
}
