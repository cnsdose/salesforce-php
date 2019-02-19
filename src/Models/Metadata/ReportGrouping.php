<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportGrouping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregateType
 * @property string|null $dateGranularity
 * @property string|null $field
 * @property string|null $sortByName
 * @property string|null $sortOrder
 * @property string|null $sortType
 */
class ReportGrouping
{
    public static $classMap = [
    ];

    public function setAggregateType(ReportAggrType $aggregateType)
    {
        $this->aggregateType = $aggregateType->getValue();
    }

    public function setDateGranularity(UserDateGranularity $dateGranularity)
    {
        $this->dateGranularity = $dateGranularity->getValue();
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setSortByName(string $sortByName)
    {
        $this->sortByName = $sortByName;
    }

    public function setSortOrder(SortOrder $sortOrder)
    {
        $this->sortOrder = $sortOrder->getValue();
    }

    public function setSortType(ReportSortType $sortType)
    {
        $this->sortType = $sortType->getValue();
    }
}
