<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValueTypeField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ValueTypeField[]|null $fields
 * @property string[]|null $foreignKeyDomain
 * @property bool|null $isForeignKey
 * @property bool|null $isNameField
 * @property int|null $minOccurs
 * @property string|null $name
 * @property PicklistEntry[]|null $picklistValues
 * @property string|null $soapType
 * @property bool|null $valueRequired
 */
class ValueTypeField
{
    public static $classMap = [
        'fields' => [
            'multiple' => true,
            'type' => ValueTypeField::class,
        ],
        'picklistValues' => [
            'multiple' => true,
            'type' => PicklistEntry::class,
        ],
    ];

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setForeignKeyDomain(array $foreignKeyDomain)
    {
        $this->foreignKeyDomain = $foreignKeyDomain;
    }

    public function setIsForeignKey(bool $isForeignKey)
    {
        $this->isForeignKey = $isForeignKey;
    }

    public function setIsNameField(bool $isNameField)
    {
        $this->isNameField = $isNameField;
    }

    public function setMinOccurs(int $minOccurs)
    {
        $this->minOccurs = $minOccurs;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPicklistValues(array $picklistValues)
    {
        $this->picklistValues = $picklistValues;
    }

    public function setSoapType(string $soapType)
    {
        $this->soapType = $soapType;
    }

    public function setValueRequired(bool $valueRequired)
    {
        $this->valueRequired = $valueRequired;
    }
}
