<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectMappingField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $inputField
 * @property string|null $outputField
 */
class ObjectMappingField
{
    public static $classMap = [
    ];

    public function setInputField(string $inputField)
    {
        $this->inputField = $inputField;
    }

    public function setOutputField(string $outputField)
    {
        $this->outputField = $outputField;
    }
}
