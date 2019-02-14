<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ListViewChart
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ListViewChart[] query()
 *
 * @property string Id
 * @property bool IsDeleted
 * @property mixed SobjectType
 * @property string DeveloperName
 * @property mixed Language
 * @property string MasterLabel
 * @property \Carbon\Carbon CreatedDate
 * @property string CreatedById
 * @property \Carbon\Carbon LastModifiedDate
 * @property string LastModifiedById
 * @property \Carbon\Carbon SystemModstamp
 * @property string OwnerId
 * @property mixed ChartType
 * @property mixed GroupingField
 * @property mixed AggregateField
 * @property mixed AggregateType
 */
class ListViewChart extends BaseRecordModel
{
    protected static $objectApiName = 'ListViewChart';
    protected $defaultFields = [
        'Id' => null,
        'IsDeleted' => 'bool',
        'SobjectType' => null,
        'DeveloperName' => null,
        'Language' => null,
        'MasterLabel' => null,
        'CreatedDate' => 'datetime',
        'CreatedById' => null,
        'LastModifiedDate' => 'datetime',
        'LastModifiedById' => null,
        'SystemModstamp' => 'datetime',
        'OwnerId' => null,
        'ChartType' => null,
        'GroupingField' => null,
        'AggregateField' => null,
        'AggregateType' => null,
    ];
}
