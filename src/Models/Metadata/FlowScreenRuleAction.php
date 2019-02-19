<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenRuleAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $attribute
 * @property string|null $fieldReference
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowScreenRuleAction extends FlowBaseElement
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setAttribute(string $attribute)
    {
        $this->attribute = $attribute;
    }

    public function setFieldReference(string $fieldReference)
    {
        $this->fieldReference = $fieldReference;
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
