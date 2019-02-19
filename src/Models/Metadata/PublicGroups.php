<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PublicGroups
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $publicGroup
 */
class PublicGroups
{
    public static $classMap = [
    ];

    public function setPublicGroup(array $publicGroup)
    {
        $this->publicGroup = $publicGroup;
    }
}
