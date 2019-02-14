<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class DataAssessmentValueMetric
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method DataAssessmentValueMetric[] query()
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
 * @property string DataAssessmentFieldMetricId
 * @property string FieldValue
 * @property mixed ValueCount
 */
class DataAssessmentValueMetric extends BaseRecordModel
{
    protected static $objectApiName = 'DataAssessmentValueMetric';
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
        'DataAssessmentFieldMetricId' => null,
        'FieldValue' => null,
        'ValueCount' => null,
    ];
}
