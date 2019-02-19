<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowChoice
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $choiceText
 * @property string|null $dataType
 * @property FlowChoiceUserInput|null $userInput
 * @property FlowElementReferenceOrValue|null $value
 */
class FlowChoice extends FlowElement
{
    public static $classMap = [
        'userInput' => [
            'multiple' => false,
            'type' => FlowChoiceUserInput::class,
        ],
        'value' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setChoiceText(string $choiceText)
    {
        $this->choiceText = $choiceText;
    }

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setUserInput(FlowChoiceUserInput $userInput)
    {
        $this->userInput = $userInput;
    }

    public function setValue(FlowElementReferenceOrValue $value)
    {
        $this->value = $value;
    }
}
