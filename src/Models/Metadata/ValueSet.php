<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:28 PM
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
 * @property ValueSettings|null $valueSettings
 */
class ValueSet
{
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

    public function setValueSettings(ValueSettings $valueSettings)
    {
        $this->valueSettings = $valueSettings;
    }
}
