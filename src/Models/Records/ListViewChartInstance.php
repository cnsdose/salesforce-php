<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Records;

use CNSDose\Salesforce\Models\BaseRecordModel;

/**
 * Class ListViewChartInstance
 * @package CNSDose\Salesforce\Models\Records
 *
 * @method ListViewChartInstance[] query()
 *
 * @property string $Id
 * @property string $ExternalId
 * @property string $ListViewChartId
 * @property string $Label
 * @property string $DeveloperName
 * @property string $SourceEntity
 * @property string $ListViewContextId
 * @property string $ChartType
 * @property bool $IsLastViewed
 * @property string $DataQuery
 * @property string $DataQueryWithoutUserFilters
 * @property bool $IsEditable
 * @property bool $IsDeletable
 * @property string $GroupingField
 * @property string $AggregateField
 * @property string $AggregateType
 */
class ListViewChartInstance extends BaseRecordModel
{
    public static $objectApiName = 'ListViewChartInstance';
    protected $defaultFields = [
        'Id' => null,
        'ExternalId' => null,
        'ListViewChartId' => null,
        'Label' => null,
        'DeveloperName' => null,
        'SourceEntity' => null,
        'ListViewContextId' => null,
        'ChartType' => null,
        'IsLastViewed' => 'bool',
        'DataQuery' => null,
        'DataQueryWithoutUserFilters' => null,
        'IsEditable' => 'bool',
        'IsDeletable' => 'bool',
        'GroupingField' => null,
        'AggregateField' => null,
        'AggregateType' => null,
    ];
}
