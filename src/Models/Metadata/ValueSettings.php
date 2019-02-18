<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:24 PM
 */

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
