<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EscalationRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property EscalationRule[]|null $escalationRule
 */
class EscalationRules extends Metadata
{
    public static $classMap = [
        'escalationRule' => [
            'multiple' => true,
            'type' => EscalationRule::class,
        ],
    ];

    public function setEscalationRule(array $escalationRule)
    {
        $this->escalationRule = $escalationRule;
    }
}
