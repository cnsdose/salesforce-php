<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppCanvasConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessMethod
 * @property string|null $canvasUrl
 * @property string|null $lifecycleClass
 * @property string[]|null $locations
 * @property string[]|null $options
 * @property string|null $samlInitiationMethod
 */
class ConnectedAppCanvasConfig
{
    public static $classMap = [
    ];

    public function setAccessMethod(AccessMethod $accessMethod)
    {
        $this->accessMethod = $accessMethod->getValue();
    }

    public function setCanvasUrl(string $canvasUrl)
    {
        $this->canvasUrl = $canvasUrl;
    }

    public function setLifecycleClass(string $lifecycleClass)
    {
        $this->lifecycleClass = $lifecycleClass;
    }

    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    public function setSamlInitiationMethod(SamlInitiationMethod $samlInitiationMethod)
    {
        $this->samlInitiationMethod = $samlInitiationMethod->getValue();
    }
}
