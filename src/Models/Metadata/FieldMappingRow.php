<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldMappingRow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property FieldMappingField[]|null $fieldMappingFields
 * @property string|null $fieldName
 * @property string|null $mappingOperation
 */
class FieldMappingRow
{
    public static $classMap = [
        'fieldMappingFields' => [
            'multiple' => true,
            'type' => FieldMappingField::class,
        ],
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setFieldMappingFields(array $fieldMappingFields)
    {
        $this->fieldMappingFields = $fieldMappingFields;
    }

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setMappingOperation(MappingOperation $mappingOperation)
    {
        $this->mappingOperation = $mappingOperation->getValue();
    }
}
