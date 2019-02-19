<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MlSlotClass
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $extractionRegex
 * @property string|null $extractionType
 * @property string|null $label
 * @property MlSlotClassValue[]|null $mlSlotClassValues
 */
class MlSlotClass
{
    public static $classMap = [
        'mlSlotClassValues' => [
            'multiple' => true,
            'type' => MlSlotClassValue::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setExtractionRegex(string $extractionRegex)
    {
        $this->extractionRegex = $extractionRegex;
    }

    public function setExtractionType(MlSlotClassExtractionType $extractionType)
    {
        $this->extractionType = $extractionType->getValue();
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMlSlotClassValues(array $mlSlotClassValues)
    {
        $this->mlSlotClassValues = $mlSlotClassValues;
    }
}
