<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValueSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $controllingField
 * @property bool|null $restricted
 * @property ValueSetValuesDefinition|null $valueSetDefinition
 * @property string|null $valueSetName
 * @property ValueSettings[]|null $valueSettings
 */
class ValueSet
{
    public static $classMap = [
        'valueSetDefinition' => [
            'multiple' => false,
            'type' => ValueSetValuesDefinition::class,
        ],
        'valueSettings' => [
            'multiple' => true,
            'type' => ValueSettings::class,
        ],
    ];

    public function setControllingField(string $controllingField)
    {
        $this->controllingField = $controllingField;
    }

    public function setRestricted(bool $restricted)
    {
        $this->restricted = $restricted;
    }

    public function setValueSetDefinition(ValueSetValuesDefinition $valueSetDefinition)
    {
        $this->valueSetDefinition = $valueSetDefinition;
    }

    public function setValueSetName(string $valueSetName)
    {
        $this->valueSetName = $valueSetName;
    }

    public function setValueSettings(array $valueSettings)
    {
        $this->valueSettings = $valueSettings;
    }
}
