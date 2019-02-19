<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Attachment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $content
 * @property string|null $name
 */
class Attachment
{
    public static $classMap = [
    ];

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
