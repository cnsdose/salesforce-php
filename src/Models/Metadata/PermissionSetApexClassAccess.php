<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetApexClassAccess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClass
 * @property bool|null $enabled
 */
class PermissionSetApexClassAccess
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
