<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectResourceDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $developerName
 * @property string|null $masterLabel
 * @property int|null $options
 * @property string|null $payloadType
 * @property string|null $resourceIdPath
 * @property string|null $resourceNamePath
 * @property string|null $resourcePath
 * @property string|null $rootNodePath
 */
class CMSConnectResourceDefinition
{
    public static $classMap = [
    ];

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setOptions(int $options)
    {
        $this->options = $options;
    }

    public function setPayloadType(string $payloadType)
    {
        $this->payloadType = $payloadType;
    }

    public function setResourceIdPath(string $resourceIdPath)
    {
        $this->resourceIdPath = $resourceIdPath;
    }

    public function setResourceNamePath(string $resourceNamePath)
    {
        $this->resourceNamePath = $resourceNamePath;
    }

    public function setResourcePath(string $resourcePath)
    {
        $this->resourcePath = $resourcePath;
    }

    public function setRootNodePath(string $rootNodePath)
    {
        $this->rootNodePath = $rootNodePath;
    }
}
