<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DuplicateRuleMatchRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $matchRuleSObjectType
 * @property string|null $matchingRule
 * @property ObjectMapping|null $objectMapping
 */
class DuplicateRuleMatchRule
{
    public static $classMap = [
        'objectMapping' => [
            'multiple' => false,
            'type' => ObjectMapping::class,
        ],
    ];

    public function setMatchRuleSObjectType(string $matchRuleSObjectType)
    {
        $this->matchRuleSObjectType = $matchRuleSObjectType;
    }

    public function setMatchingRule(string $matchingRule)
    {
        $this->matchingRule = $matchingRule;
    }

    public function setObjectMapping(ObjectMapping $objectMapping)
    {
        $this->objectMapping = $objectMapping;
    }
}
