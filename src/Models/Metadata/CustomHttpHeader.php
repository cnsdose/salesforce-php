<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomHttpHeader
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $headerFieldName
 * @property string|null $headerFieldValue
 * @property bool|null $isActive
 */
class CustomHttpHeader
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setHeaderFieldName(string $headerFieldName)
    {
        $this->headerFieldName = $headerFieldName;
    }

    public function setHeaderFieldValue(string $headerFieldValue)
    {
        $this->headerFieldValue = $headerFieldValue;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }
}
