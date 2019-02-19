<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $inputObject
 * @property ObjectMappingField[]|null $mappingFields
 * @property string|null $outputObject
 */
class ObjectMapping
{
    public static $classMap = [
        'mappingFields' => [
            'multiple' => true,
            'type' => ObjectMappingField::class,
        ],
    ];

    public function setInputObject(string $inputObject)
    {
        $this->inputObject = $inputObject;
    }

    public function setMappingFields(array $mappingFields)
    {
        $this->mappingFields = $mappingFields;
    }

    public function setOutputObject(string $outputObject)
    {
        $this->outputObject = $outputObject;
    }
}
