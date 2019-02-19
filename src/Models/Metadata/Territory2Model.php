<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2Model
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FieldValue[]|null $customFields
 * @property string|null $description
 * @property string|null $name
 */
class Territory2Model extends Metadata
{
    public static $classMap = [
        'customFields' => [
            'multiple' => true,
            'type' => FieldValue::class,
        ],
    ];

    public function setCustomFields(array $customFields)
    {
        $this->customFields = $customFields;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
