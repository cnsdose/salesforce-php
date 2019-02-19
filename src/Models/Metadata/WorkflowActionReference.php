<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowActionReference
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $type
 */
class WorkflowActionReference
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(WorkflowActionType $type)
    {
        $this->type = $type->getValue();
    }
}
