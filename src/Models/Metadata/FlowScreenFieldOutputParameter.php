<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenFieldOutputParameter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignToReference
 * @property string|null $name
 */
class FlowScreenFieldOutputParameter extends FlowBaseElement
{
    public static $classMap = [
    ];

    public function setAssignToReference(string $assignToReference)
    {
        $this->assignToReference = $assignToReference;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
