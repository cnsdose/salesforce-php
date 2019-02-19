<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowTextTemplateTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $text
 */
class FlowTextTemplateTranslation
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }
}
