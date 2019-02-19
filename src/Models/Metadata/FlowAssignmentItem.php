<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowAssignmentItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignToReference
 * @property string|null $operator
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowAssignmentItem extends FlowBaseElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setAssignToReference(string $assignToReference)
    {
        $this->assignToReference = $assignToReference;
    }

    public function setOperator(FlowAssignmentOperator $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
