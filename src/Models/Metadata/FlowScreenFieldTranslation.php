<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenFieldTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fieldText
 * @property string|null $helpText
 * @property string|null $name
 * @property FlowInputValidationRuleTranslation|null $validationRule
 */
class FlowScreenFieldTranslation
{
    public static $classMap = [
        'validationRule' => [
            'multiple' => false,
            'type' => FlowInputValidationRuleTranslation::class,
        ],
    ];

    public function setFieldText(string $fieldText)
    {
        $this->fieldText = $fieldText;
    }

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValidationRule(FlowInputValidationRuleTranslation $validationRule)
    {
        $this->validationRule = $validationRule;
    }
}
