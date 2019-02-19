<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2Rule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $booleanFilter
 * @property string|null $name
 * @property string|null $objectType
 * @property Territory2RuleItem[]|null $ruleItems
 */
class Territory2Rule extends Metadata
{
    public static $classMap = [
        'ruleItems' => [
            'multiple' => true,
            'type' => Territory2RuleItem::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setObjectType(string $objectType)
    {
        $this->objectType = $objectType;
    }

    public function setRuleItems(array $ruleItems)
    {
        $this->ruleItems = $ruleItems;
    }
}
