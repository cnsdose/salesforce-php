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
 * @property string $Id
 * @property bool $IsDeleted
 * @property string $SobjectType
 * @property string $DeveloperName
 * @property string $Language
 * @property string $MasterLabel
 * @property \Carbon\Carbon $CreatedDate
 * @property string $CreatedById
 * @property \Carbon\Carbon $LastModifiedDate
 * @property string $LastModifiedById
 * @property \Carbon\Carbon $SystemModstamp
 * @property string $OwnerId
 * @property string $ChartType
 * @property string $GroupingField
 * @property string $AggregateField
 * @property string $AggregateType
 */
class ListViewChart extends BaseRecordModel
{
    public static $objectApiName = 'ListViewChart';
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
