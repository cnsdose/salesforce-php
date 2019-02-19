<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowInputFieldAssignment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowInputFieldAssignment extends FlowBaseElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
