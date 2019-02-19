<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Document
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $internalUseOnly
 * @property string|null $keywords
 * @property string|null $name
 * @property bool|null $public
 */
class Document extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setInternalUseOnly(bool $internalUseOnly)
    {
        $this->internalUseOnly = $internalUseOnly;
    }

    public function setKeywords(string $keywords)
    {
        $this->keywords = $keywords;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPublic(bool $public)
    {
        $this->public = $public;
    }
}
