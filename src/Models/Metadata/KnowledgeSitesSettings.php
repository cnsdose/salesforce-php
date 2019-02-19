<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class KnowledgeSitesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $site
 */
class KnowledgeSitesSettings
{
    public static $classMap = [
    ];

    public function setSite(array $site)
    {
        $this->site = $site;
    }
}
