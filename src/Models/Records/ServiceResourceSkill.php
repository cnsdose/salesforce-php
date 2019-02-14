<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ServiceResourceSkill
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ServiceResourceSkill[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string SkillNumber
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property \Carbon\Carbon LastViewedDate
 * @property \Carbon\Carbon LastReferencedDate
 * @property string ServiceResourceId
 * @property string SkillId
 * @property float SkillLevel
 * @property \Carbon\Carbon EffectiveStartDate
 * @property \Carbon\Carbon EffectiveEndDate
 */
class ServiceResourceSkill extends BaseRecordModel
{
    protected static $objectApiName = 'ServiceResourceSkill';
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
        'ServiceResourceId' => null,
        'SkillId' => null,
        'SkillLevel' => 'number:2,2',
        'EffectiveStartDate' => 'datetime',
        'EffectiveEndDate' => 'datetime',
    ];
}
