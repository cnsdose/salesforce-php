<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkflowActionReference[]|null $action
 */
class ApprovalAction
{
    public static $classMap = [
        'action' => [
            'multiple' => true,
            'type' => WorkflowActionReference::class,
        ],
    ];

    public function setAction(array $action)
    {
        $this->action = $action;
    }
}
