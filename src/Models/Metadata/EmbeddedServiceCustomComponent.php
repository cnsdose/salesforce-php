<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceCustomComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $componentBundleType
 * @property string|null $customComponent
 * @property string|null $customComponentType
 */
class EmbeddedServiceCustomComponent
{
    public static $classMap = [
    ];

    public function setComponentBundleType(EmbeddedServiceComponentBundleType $componentBundleType)
    {
        $this->componentBundleType = $componentBundleType->getValue();
    }

    public function setCustomComponent(string $customComponent)
    {
        $this->customComponent = $customComponent;
    }

    public function setCustomComponentType(EmbeddedServiceCustomComponentType $customComponentType)
    {
        $this->customComponentType = $customComponentType->getValue();
    }
}
