<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class OpportunityHistory
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method OpportunityHistory[] query()
 *
 * @property string $Id
 * @property string $OpportunityId
 * @property string $CreatedById
 * @property \Carbon\Carbon $CreatedDate
 * @property mixed $StageName
 * @property float $Amount
 * @property float $ExpectedRevenue
 * @property \Carbon\Carbon $CloseDate
 * @property mixed $Probability
 * @property mixed $ForecastCategory
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $SystemModstamp
 * @property bool $IsDeleted
 */
class OpportunityHistory extends BaseRecordModel
{
    public static $objectApiName = 'OpportunityHistory';
    protected $defaultFields = [
        'Id' => null,
        'OpportunityId' => null,
        'CreatedById' => null,
        'CreatedDate' => 'datetime',
        'StageName' => null,
        'Amount' => 'number:16,2',
        'ExpectedRevenue' => 'number:16,2',
        'CloseDate' => 'date',
        'Probability' => null,
        'ForecastCategory' => null,
        'CurrencyIsoCode' => null,
        'SystemModstamp' => 'datetime',
        'IsDeleted' => 'bool',
    ];
}
