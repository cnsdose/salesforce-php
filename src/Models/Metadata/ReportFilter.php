<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property ReportFilterItem[]|null $criteriaItems
 * @property string|null $language
 */
class ReportFilter
{
    public static $classMap = [
        'criteriaItems' => [
            'multiple' => true,
            'type' => ReportFilterItem::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setCriteriaItems(array $criteriaItems)
    {
        $this->criteriaItems = $criteriaItems;
    }

    public function setLanguage(Language $language)
    {
        $this->language = $language->getValue();
    }
}
