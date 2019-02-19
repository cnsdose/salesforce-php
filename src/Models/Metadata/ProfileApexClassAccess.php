<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileApexClassAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClass
 * @property bool|null $enabled
 */
class ProfileApexClassAccess
{
    public static $classMap = [
    ];

    public function setApexClass(string $apexClass)
    {
        $this->apexClass = $apexClass;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
