<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityStage
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityStage[] query()
 *
 * @property string $Id
 * @property string $MasterLabel
 * @property string $ApiName
 * @property bool $IsActive
 * @property mixed $SortOrder
 * @property bool $IsClosed
 * @property bool $IsWon
 * @property mixed $ForecastCategory
 * @property mixed $ForecastCategoryName
 * @property mixed $DefaultProbability
 * @property string $Description
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property \Carbon\Carbon $SystemModstamp
 */
class OpportunityStage extends BaseRecordModel
{
    protected static $objectApiName = 'OpportunityStage';
    protected $defaultFields = [
        'Id' => null,
        'MasterLabel' => null,
        'ApiName' => null,
        'IsActive' => 'bool',
        'SortOrder' => null,
        'IsClosed' => 'bool',
        'IsWon' => 'bool',
        'ForecastCategory' => null,
        'ForecastCategoryName' => null,
        'DefaultProbability' => null,
        'Description' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'LastModifiedById' => null,
        'LastModifiedDate' => 'datetime',
        'SystemModstamp' => 'datetime',
    ];
}
