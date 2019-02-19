<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlexiPageTemplateInstance
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property ComponentInstanceProperty[]|null $properties
 */
class FlexiPageTemplateInstance
{
    public static $classMap = [
        'properties' => [
            'multiple' => true,
            'type' => ComponentInstanceProperty::class,
        ],
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setProperties(array $properties)
    {
        $this->properties = $properties;
    }
}
