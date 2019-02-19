<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowRecordFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $operator
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowRecordFilter extends FlowBaseElement
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

    public function setOperator(FlowRecordFilterOperator $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
