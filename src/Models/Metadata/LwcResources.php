<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LwcResources
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property LwcResource[]|null $lwcResource
 */
class LwcResources
{
    public static $classMap = [
        'lwcResource' => [
            'multiple' => true,
            'type' => LwcResource::class,
        ],
    ];

    public function setLwcResource(array $lwcResource)
    {
        $this->lwcResource = $lwcResource;
    }
}
