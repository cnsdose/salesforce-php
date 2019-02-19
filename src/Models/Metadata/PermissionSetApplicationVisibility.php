<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetApplicationVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $application
 * @property bool|null $visible
 */
class PermissionSetApplicationVisibility
{
    public static $classMap = [
    ];

    public function setApplication(string $application)
    {
        $this->application = $application;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
