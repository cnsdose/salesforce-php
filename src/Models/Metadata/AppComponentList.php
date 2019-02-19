<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppComponentList
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $alignment
 * @property string[]|null $components
 */
class AppComponentList
{
    public static $classMap = [
    ];

    public function setAlignment(string $alignment)
    {
        $this->alignment = $alignment;
    }

    public function setComponents(array $components)
    {
        $this->components = $components;
    }
}
