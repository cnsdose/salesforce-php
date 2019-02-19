<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StaticResource
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $cacheControl
 * @property string|null $contentType
 * @property string|null $description
 */
class StaticResource extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setCacheControl(StaticResourceCacheControl $cacheControl)
    {
        $this->cacheControl = $cacheControl->getValue();
    }

    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
