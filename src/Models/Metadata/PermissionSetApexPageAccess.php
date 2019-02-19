<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetApexPageAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexPage
 * @property bool|null $enabled
 */
class PermissionSetApexPageAccess
{
    public static $classMap = [
    ];

    public function setApexPage(string $apexPage)
    {
        $this->apexPage = $apexPage;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
