<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowChoiceUserInput
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $isRequired
 * @property string|null $promptText
 * @property FlowInputValidationRule|null $validationRule
 */
class FlowChoiceUserInput extends FlowBaseElement
{
    public static $classMap = [
        'validationRule' => [
            'multiple' => false,
            'type' => FlowInputValidationRule::class,
        ],
    ];

    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }

    public function setPromptText(string $promptText)
    {
        $this->promptText = $promptText;
    }

    public function setValidationRule(FlowInputValidationRule $validationRule)
    {
        $this->validationRule = $validationRule;
    }
}
