<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportDataCategoryFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataCategory
 * @property string|null $dataCategoryGroup
 * @property string|null $operator
 */
class ReportDataCategoryFilter
{
    public static $classMap = [
    ];

    public function setDataCategory(string $dataCategory)
    {
        $this->dataCategory = $dataCategory;
    }

    public function setDataCategoryGroup(string $dataCategoryGroup)
    {
        $this->dataCategoryGroup = $dataCategoryGroup;
    }

    public function setOperator(DataCategoryFilterOperation $operator)
    {
        $this->operator = $operator->getValue();
    }
}
