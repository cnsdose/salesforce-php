<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataAssessmentMetric
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataAssessmentMetric[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property string Name
 * @property mixed CurrencyIsoCode
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property mixed NumTotal
 * @property mixed NumProcessed
 * @property mixed NumMatched
 * @property mixed NumMatchedDifferent
 * @property mixed NumUnmatched
 * @property mixed NumDuplicates
 */
class DataAssessmentMetric extends BaseRecordModel
{
    protected static $objectApiName = 'DataAssessmentMetric';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'Name' => null,
        'CurrencyIsoCode' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'NumTotal' => null,
        'NumProcessed' => null,
        'NumMatched' => null,
        'NumMatchedDifferent' => null,
        'NumUnmatched' => null,
        'NumDuplicates' => null,
    ];
}
