<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomDataTypeComponentTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $developerSuffix
 * @property string|null $label
 */
class CustomDataTypeComponentTranslation
{
    public static $classMap = [
    ];

    public function setDeveloperSuffix(string $developerSuffix)
    {
        $this->developerSuffix = $developerSuffix;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
