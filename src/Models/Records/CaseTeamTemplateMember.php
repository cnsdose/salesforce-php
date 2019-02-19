<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseTeamTemplateMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseTeamTemplateMember[] query()
 *
 * @property string $Id
 * @property string $TeamTemplateId
 * @property string $MemberId
 * @property string $TeamRoleId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CaseTeamTemplateMember extends BaseRecordModel
{
    protected static $objectApiName = 'CaseTeamTemplateMember';
    protected $defaultFields = [
        'Id' => null,
        'TeamTemplateId' => null,
        'MemberId' => null,
        'TeamRoleId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
