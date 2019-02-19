<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $choiceReferences
 * @property string|null $dataType
 * @property string|null $defaultSelectedChoiceReference
 * @property FlowElementReferenceOrValue|null $defaultValue
 * @property string|null $extensionName
 * @property string|null $fieldText
 * @property string|null $fieldType
 * @property string|null $helpText
 * @property FlowScreenFieldInputParameter[]|null $inputParameters
 * @property bool|null $isRequired
 * @property bool|null $isVisible
 * @property FlowScreenFieldOutputParameter[]|null $outputParameters
 * @property int|null $scale
 * @property FlowInputValidationRule|null $validationRule
 */
class FlowScreenField extends FlowElement
{
    public static $classMap = [
        'defaultValue' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
        'inputParameters' => [
            'multiple' => true,
            'type' => FlowScreenFieldInputParameter::class,
        ],
        'outputParameters' => [
            'multiple' => true,
            'type' => FlowScreenFieldOutputParameter::class,
        ],
        'validationRule' => [
            'multiple' => false,
            'type' => FlowInputValidationRule::class,
        ],
    ];

    public function setChoiceReferences(array $choiceReferences)
    {
        $this->choiceReferences = $choiceReferences;
    }

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setDefaultSelectedChoiceReference(string $defaultSelectedChoiceReference)
    {
        $this->defaultSelectedChoiceReference = $defaultSelectedChoiceReference;
    }

    public function setDefaultValue(FlowElementReferenceOrValue $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function setExtensionName(string $extensionName)
    {
        $this->extensionName = $extensionName;
    }

    public function setFieldText(string $fieldText)
    {
        $this->fieldText = $fieldText;
    }

    public function setFieldType(FlowScreenFieldType $fieldType)
    {
        $this->fieldType = $fieldType->getValue();
    }

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }

    public function setInputParameters(array $inputParameters)
    {
        $this->inputParameters = $inputParameters;
    }

    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }

    public function setIsVisible(bool $isVisible)
    {
        $this->isVisible = $isVisible;
    }

    public function setOutputParameters(array $outputParameters)
    {
        $this->outputParameters = $outputParameters;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }

    public function setValidationRule(FlowInputValidationRule $validationRule)
    {
        $this->validationRule = $validationRule;
    }
}
