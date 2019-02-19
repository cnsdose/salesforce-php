<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CorsWhitelistOrigin
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $urlPattern
 */
class CorsWhitelistOrigin extends Metadata
{
    public static $classMap = [
    ];

    public function setUrlPattern(string $urlPattern)
    {
        $this->urlPattern = $urlPattern;
    }
}
