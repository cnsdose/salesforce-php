<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Support;

use CNSDose\Salesforce\Models\BaseModel;

/**
 * Class CaseSolution
 * @package CNSDose\Salesforce\Models\Support
 *
 * @method CaseSolution[] query()
 *
 * @property string Id
 * @property string CaseId
 * @property string SolutionId
 * @property string CreatedById
 * @property \Carbon\Carbon CreatedDate
 * @property \Carbon\Carbon SystemModstamp
 * @property bool IsDeleted
 */
class CaseSolution extends BaseModel
{
    protected static $objectApiName = 'CaseSolution';
    protected $defaultFields = [
        'Id' => null,
        'CaseId' => null,
        'SolutionId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
