<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityCompetitor
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityCompetitor[] query()
 *
 * @property string Id
 * @property string OpportunityId
 * @property mixed CompetitorName
 * @property string Strengths
 * @property string Weaknesses
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 */
class OpportunityCompetitor extends BaseRecordModel
{
    protected static $objectApiName = 'OpportunityCompetitor';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
        'CompetitorName' => null,
        'Strengths' => null,
        'Weaknesses' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
