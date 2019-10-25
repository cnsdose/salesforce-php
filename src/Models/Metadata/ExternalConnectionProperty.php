<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ExternalConnectionProperty
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $propertyName
 * @property string|null $propertyValue
 */
class ExternalConnectionProperty
{
    public static $classMap = [
    ];

    public function setPropertyName(ConnectionPropertyName $propertyName)
    {
        $this->propertyName = $propertyName->getValue();
    }

    public function setPropertyValue(string $propertyValue)
    {
        $this->propertyValue = $propertyValue;
    }
}
