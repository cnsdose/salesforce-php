<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PostTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $default
 * @property string|null $description
 * @property string[]|null $fields
 * @property string|null $label
 */
class PostTemplate extends Metadata
{
    public static $classMap = [
    ];

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
