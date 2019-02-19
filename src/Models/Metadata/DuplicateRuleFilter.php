<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DuplicateRuleFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property DuplicateRuleFilterItem[]|null $duplicateRuleFilterItems
 */
class DuplicateRuleFilter
{
    public static $classMap = [
        'duplicateRuleFilterItems' => [
            'multiple' => true,
            'type' => DuplicateRuleFilterItem::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setDuplicateRuleFilterItems(array $duplicateRuleFilterItems)
    {
        $this->duplicateRuleFilterItems = $duplicateRuleFilterItems;
    }
}
