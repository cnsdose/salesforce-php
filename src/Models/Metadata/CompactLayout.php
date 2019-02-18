<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CompactLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $fields
 * @property string|null $label
 */
class CompactLayout extends Metadata
{
    public static $classMap = [
    ];

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
