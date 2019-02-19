<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FindSimilarOppFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $similarOpportunitiesDisplayColumns
 * @property string[]|null $similarOpportunitiesMatchFields
 */
class FindSimilarOppFilter
{
    public static $classMap = [
    ];

    public function setSimilarOpportunitiesDisplayColumns(array $similarOpportunitiesDisplayColumns)
    {
        $this->similarOpportunitiesDisplayColumns = $similarOpportunitiesDisplayColumns;
    }

    public function setSimilarOpportunitiesMatchFields(array $similarOpportunitiesMatchFields)
    {
        $this->similarOpportunitiesMatchFields = $similarOpportunitiesMatchFields;
    }
}
