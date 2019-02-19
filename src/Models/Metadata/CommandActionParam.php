<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommandActionParam
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultValue
 * @property string|null $description
 * @property string|null $name
 * @property bool|null $required
 * @property string|null $type
 */
class CommandActionParam
{
    public static $classMap = [
    ];

    public function setDefaultValue(string $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRequired(bool $required)
    {
        $this->required = $required;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
