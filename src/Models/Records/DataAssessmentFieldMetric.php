<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataAssessmentFieldMetric
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataAssessmentFieldMetric[] query()
 *
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $Name
 * @property mixed $CurrencyIsoCode
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $DataAssessmentMetricId
 * @property string $FieldName
 * @property mixed $NumMatchedInSync
 * @property mixed $NumMatchedDifferent
 * @property mixed $NumMatchedBlanks
 * @property mixed $NumUnmatchedBlanks
 */
class DataAssessmentFieldMetric extends BaseRecordModel
{
    protected static $objectApiName = 'DataAssessmentFieldMetric';
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
        'DataAssessmentMetricId' => null,
        'FieldName' => null,
        'NumMatchedInSync' => null,
        'NumMatchedDifferent' => null,
        'NumMatchedBlanks' => null,
        'NumUnmatchedBlanks' => null,
    ];
}
