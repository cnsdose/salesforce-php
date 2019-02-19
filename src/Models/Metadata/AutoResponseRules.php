<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AutoResponseRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AutoResponseRule[]|null $autoResponseRule
 */
class AutoResponseRules extends Metadata
{
    public static $classMap = [
        'autoResponseRule' => [
            'multiple' => true,
            'type' => AutoResponseRule::class,
        ],
    ];

    public function setAutoResponseRule(array $autoResponseRule)
    {
        $this->autoResponseRule = $autoResponseRule;
    }
}
