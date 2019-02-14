<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseTeamMember
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseTeamMember[] query()
 *
 * @property string Id
 * @property string ParentId
 * @property string MemberId
 * @property string TeamTemplateMemberId
 * @property string TeamRoleId
 * @property string TeamTemplateId
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 */
class CaseTeamMember extends BaseRecordModel
{
    protected static $objectApiName = 'CaseTeamMember';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'MemberId' => null,
        'TeamTemplateMemberId' => null,
        'TeamRoleId' => null,
        'TeamTemplateId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
