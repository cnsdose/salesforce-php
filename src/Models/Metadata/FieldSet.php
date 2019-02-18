<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FieldSetItem[]|null $availableFields
 * @property string|null $description
 * @property FieldSetItem[]|null $displayedFields
 * @property string|null $label
 */
class FieldSet extends Metadata
{
    public function setAvailableFields(array $availableFields)
    {
        $this->availableFields = $availableFields;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisplayedFields(array $displayedFields)
    {
        $this->displayedFields = $displayedFields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
