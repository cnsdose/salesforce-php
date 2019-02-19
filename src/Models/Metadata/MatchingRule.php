<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MatchingRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property string|null $description
 * @property string|null $label
 * @property MatchingRuleItem[]|null $matchingRuleItems
 * @property string|null $ruleStatus
 */
class MatchingRule extends Metadata
{
    public static $classMap = [
        'matchingRuleItems' => [
            'multiple' => true,
            'type' => MatchingRuleItem::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMatchingRuleItems(array $matchingRuleItems)
    {
        $this->matchingRuleItems = $matchingRuleItems;
    }

    public function setRuleStatus(MatchingRuleStatus $ruleStatus)
    {
        $this->ruleStatus = $ruleStatus->getValue();
    }
}
