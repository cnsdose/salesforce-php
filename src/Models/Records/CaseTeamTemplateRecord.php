<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class CaseTeamTemplateRecord
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method CaseTeamTemplateRecord[] query()
 *
 * @property string $Id
 * @property string $ParentId
 * @property string $TeamTemplateId
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $SystemModstamp
 */
class CaseTeamTemplateRecord extends BaseRecordModel
{
    protected static $objectApiName = 'CaseTeamTemplateRecord';
    protected $defaultFields = [
        'Id' => null,
        'ParentId' => null,
        'TeamTemplateId' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'SystemModstamp' => 'datetime',
    ];
}
