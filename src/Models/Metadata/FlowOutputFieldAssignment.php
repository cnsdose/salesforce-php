<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowOutputFieldAssignment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignToReference
 * @property string|null $field
 */
class FlowOutputFieldAssignment extends FlowBaseElement
{
    public static $classMap = [
    ];

    public function setAssignToReference(string $assignToReference)
    {
        $this->assignToReference = $assignToReference;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }
}
