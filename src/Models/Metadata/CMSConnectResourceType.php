<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectResourceType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CMSConnectResourceDefinition[]|null $cmsConnectResourceDefinition
 * @property string|null $developerName
 * @property string|null $masterLabel
 * @property string|null $resourceType
 */
class CMSConnectResourceType
{
    public static $classMap = [
        'cmsConnectResourceDefinition' => [
            'multiple' => true,
            'type' => CMSConnectResourceDefinition::class,
        ],
    ];

    public function setCmsConnectResourceDefinition(array $cmsConnectResourceDefinition)
    {
        $this->cmsConnectResourceDefinition = $cmsConnectResourceDefinition;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setResourceType(string $resourceType)
    {
        $this->resourceType = $resourceType;
    }
}
