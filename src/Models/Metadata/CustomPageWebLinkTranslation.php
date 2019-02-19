<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomPageWebLinkTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property string|null $name
 */
class CustomPageWebLinkTranslation
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
