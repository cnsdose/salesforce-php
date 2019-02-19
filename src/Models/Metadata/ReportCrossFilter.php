<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportCrossFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportFilterItem[]|null $criteriaItems
 * @property string|null $operation
 * @property string|null $primaryTableColumn
 * @property string|null $relatedTable
 * @property string|null $relatedTableJoinColumn
 */
class ReportCrossFilter
{
    public static $classMap = [
        'criteriaItems' => [
            'multiple' => true,
            'type' => ReportFilterItem::class,
        ],
    ];

    public function setCriteriaItems(array $criteriaItems)
    {
        $this->criteriaItems = $criteriaItems;
    }

    public function setOperation(ObjectFilterOperator $operation)
    {
        $this->operation = $operation->getValue();
    }

    public function setPrimaryTableColumn(string $primaryTableColumn)
    {
        $this->primaryTableColumn = $primaryTableColumn;
    }

    public function setRelatedTable(string $relatedTable)
    {
        $this->relatedTable = $relatedTable;
    }

    public function setRelatedTableJoinColumn(string $relatedTableJoinColumn)
    {
        $this->relatedTableJoinColumn = $relatedTableJoinColumn;
    }
}
