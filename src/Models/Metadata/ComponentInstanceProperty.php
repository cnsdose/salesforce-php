<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ComponentInstanceProperty
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $type
 * @property string|null $value
 */
class ComponentInstanceProperty
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(ComponentInstancePropertyTypeEnum $type)
    {
        $this->type = $type->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
