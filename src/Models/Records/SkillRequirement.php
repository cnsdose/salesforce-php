<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class SkillRequirement
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method SkillRequirement[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SkillNumber
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property \Carbon\Carbon $LastViewedDate
 * @property \Carbon\Carbon $LastReferencedDate
 * @property string $RelatedRecordId
 * @property string $SkillId
 * @property float $SkillLevel
 */
class SkillRequirement extends BaseRecordModel
{
    protected static $objectApiName = 'SkillRequirement';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SkillNumber' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'LastViewedDate' => 'datetime',
        'LastReferencedDate' => 'datetime',
        'RelatedRecordId' => null,
        'SkillId' => null,
        'SkillLevel' => 'number:2,2',
    ];
}
