<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MatchingRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property MatchingRule[]|null $matchingRules
 */
class MatchingRules extends Metadata
{
    public static $classMap = [
        'matchingRules' => [
            'multiple' => true,
            'type' => MatchingRule::class,
        ],
    ];

    public function setMatchingRules(array $matchingRules)
    {
        $this->matchingRules = $matchingRules;
    }
}
