<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BrandingSetProperty
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $propertyName
 * @property string|null $propertyValue
 */
class BrandingSetProperty
{
    public static $classMap = [
    ];

    public function setPropertyName(string $propertyName)
    {
        $this->propertyName = $propertyName;
    }

    public function setPropertyValue(string $propertyValue)
    {
        $this->propertyValue = $propertyValue;
    }
}
