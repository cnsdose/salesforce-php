<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CanvasMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessMethod
 * @property string|null $canvasOptions
 * @property string|null $canvasUrl
 * @property string|null $lifecycleClass
 * @property string|null $locationOptions
 * @property string|null $samlInitiationMethod
 */
class CanvasMetadata extends Metadata
{
    public static $classMap = [
    ];

    public function setAccessMethod(string $accessMethod)
    {
        $this->accessMethod = $accessMethod;
    }

    public function setCanvasOptions(string $canvasOptions)
    {
        $this->canvasOptions = $canvasOptions;
    }

    public function setCanvasUrl(string $canvasUrl)
    {
        $this->canvasUrl = $canvasUrl;
    }

    public function setLifecycleClass(string $lifecycleClass)
    {
        $this->lifecycleClass = $lifecycleClass;
    }

    public function setLocationOptions(string $locationOptions)
    {
        $this->locationOptions = $locationOptions;
    }

    public function setSamlInitiationMethod(string $samlInitiationMethod)
    {
        $this->samlInitiationMethod = $samlInitiationMethod;
    }
}
