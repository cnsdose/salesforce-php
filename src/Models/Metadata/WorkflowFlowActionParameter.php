<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowFlowActionParameter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $value
 */
class WorkflowFlowActionParameter
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
