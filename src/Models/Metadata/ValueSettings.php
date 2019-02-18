<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValueSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $controllingFieldValue
 * @property string|null $valueName
 */
class ValueSettings
{
    public function setControllingFieldValue(array $controllingFieldValue)
    {
        $this->controllingFieldValue = $controllingFieldValue;
    }

    public function setValueName(string $valueName)
    {
        $this->valueName = $valueName;
    }
}
