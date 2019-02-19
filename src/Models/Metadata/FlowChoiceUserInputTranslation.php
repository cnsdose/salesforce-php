<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowChoiceUserInputTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $promptText
 * @property FlowInputValidationRuleTranslation|null $validationRule
 */
class FlowChoiceUserInputTranslation
{
    public static $classMap = [
        'validationRule' => [
            'multiple' => false,
            'type' => FlowInputValidationRuleTranslation::class,
        ],
    ];

    public function setPromptText(string $promptText)
    {
        $this->promptText = $promptText;
    }

    public function setValidationRule(FlowInputValidationRuleTranslation $validationRule)
    {
        $this->validationRule = $validationRule;
    }
}
