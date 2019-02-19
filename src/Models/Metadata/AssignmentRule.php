<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AssignmentRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property RuleEntry[]|null $ruleEntry
 */
class AssignmentRule extends Metadata
{
    public static $classMap = [
        'ruleEntry' => [
            'multiple' => true,
            'type' => RuleEntry::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setRuleEntry(array $ruleEntry)
    {
        $this->ruleEntry = $ruleEntry;
    }
}
