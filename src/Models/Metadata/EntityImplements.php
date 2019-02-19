<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntityImplements
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FieldImplements[]|null $fieldMap
 * @property string|null $interface
 * @property bool|null $isDefault
 */
class EntityImplements extends Metadata
{
    public static $classMap = [
        'fieldMap' => [
            'multiple' => true,
            'type' => FieldImplements::class,
        ],
    ];

    public function setFieldMap(array $fieldMap)
    {
        $this->fieldMap = $fieldMap;
    }

    public function setInterface(string $interface)
    {
        $this->interface = $interface;
    }

    public function setIsDefault(bool $isDefault)
    {
        $this->isDefault = $isDefault;
    }
}
