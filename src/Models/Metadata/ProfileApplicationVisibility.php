<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileApplicationVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $application
 * @property bool|null $default
 * @property bool|null $visible
 */
class ProfileApplicationVisibility
{
    public static $classMap = [
    ];

    public function setApplication(string $application)
    {
        $this->application = $application;
    }

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
