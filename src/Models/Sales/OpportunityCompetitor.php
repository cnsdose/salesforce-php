<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Sales;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class OpportunityCompetitor
 * @package CNSDose\Salesforce\Models\Sales
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
class OpportunityCompetitor extends BaseModel
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
