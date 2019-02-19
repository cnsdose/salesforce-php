<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileTabVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $tab
 * @property string|null $visibility
 */
class ProfileTabVisibility
{
    public static $classMap = [
    ];

    public function setTab(string $tab)
    {
        $this->tab = $tab;
    }

    public function setVisibility(TabVisibility $visibility)
    {
        $this->visibility = $visibility->getValue();
    }
}
