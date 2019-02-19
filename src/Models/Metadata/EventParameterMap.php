<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EventParameterMap
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $parameterName
 * @property string|null $parameterValue
 */
class EventParameterMap
{
    public static $classMap = [
    ];

    public function setParameterName(string $parameterName)
    {
        $this->parameterName = $parameterName;
    }

    public function setParameterValue(string $parameterValue)
    {
        $this->parameterValue = $parameterValue;
    }
}
