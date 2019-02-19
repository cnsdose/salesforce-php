<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenFieldInputParameter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowScreenFieldInputParameter extends FlowBaseElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
