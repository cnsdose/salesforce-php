<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalStepRejectBehavior
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 */
class ApprovalStepRejectBehavior
{
    public static $classMap = [
    ];

    public function setType(StepRejectBehaviorType $type)
    {
        $this->type = $type->getValue();
    }
}
