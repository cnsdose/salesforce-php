<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowConstant
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataType
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowConstant extends FlowElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
