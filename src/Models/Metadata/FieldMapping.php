<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property string|null $developerName
 * @property FieldMappingRow[]|null $fieldMappingRows
 * @property string|null $masterLabel
 */
class FieldMapping
{
    public static $classMap = [
        'fieldMappingRows' => [
            'multiple' => true,
            'type' => FieldMappingRow::class,
        ],
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setFieldMappingRows(array $fieldMappingRows)
    {
        $this->fieldMappingRows = $fieldMappingRows;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}
