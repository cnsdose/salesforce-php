<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowChoiceTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $choiceText
 * @property string|null $name
 * @property FlowChoiceUserInputTranslation|null $userInput
 */
class FlowChoiceTranslation
{
    public static $classMap = [
        'userInput' => [
            'multiple' => false,
            'type' => FlowChoiceUserInputTranslation::class,
        ],
    ];

    public function setChoiceText(string $choiceText)
    {
        $this->choiceText = $choiceText;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setUserInput(FlowChoiceUserInputTranslation $userInput)
    {
        $this->userInput = $userInput;
    }
}
