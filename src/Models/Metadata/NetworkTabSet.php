<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NetworkTabSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $customTab
 * @property string|null $defaultTab
 * @property string[]|null $standardTab
 */
class NetworkTabSet
{
    public static $classMap = [
    ];

    public function setCustomTab(array $customTab)
    {
        $this->customTab = $customTab;
    }

    public function setDefaultTab(string $defaultTab)
    {
        $this->defaultTab = $defaultTab;
    }

    public function setStandardTab(array $standardTab)
    {
        $this->standardTab = $standardTab;
    }
}
