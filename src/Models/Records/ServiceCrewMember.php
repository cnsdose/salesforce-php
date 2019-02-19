<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceCrewMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceCrewMember[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $ServiceCrewMemberNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $ServiceCrewId
 * @property string $ServiceResourceId
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property bool $IsLeader
 */
class ServiceCrewMember extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceCrewMember';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'ServiceCrewMemberNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'ServiceCrewId' => null,
        'ServiceResourceId' => null,
        'StartDate' => 'datetime',
        'EndDate' => 'datetime',
        'IsLeader' => 'bool',
    ];
}
