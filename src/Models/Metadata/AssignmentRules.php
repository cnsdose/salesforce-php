<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AssignmentRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AssignmentRule[]|null $assignmentRule
 */
class AssignmentRules extends Metadata
{
    public static $classMap = [
        'assignmentRule' => [
            'multiple' => true,
            'type' => AssignmentRule::class,
        ],
    ];

    public function setAssignmentRule(array $assignmentRule)
    {
        $this->assignmentRule = $assignmentRule;
    }
}
