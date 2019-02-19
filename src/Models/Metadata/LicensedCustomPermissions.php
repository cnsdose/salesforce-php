<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LicensedCustomPermissions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customPermission
 * @property string|null $licenseDefinition
 */
class LicensedCustomPermissions
{
    public static $classMap = [
    ];

    public function setCustomPermission(string $customPermission)
    {
        $this->customPermission = $customPermission;
    }

    public function setLicenseDefinition(string $licenseDefinition)
    {
        $this->licenseDefinition = $licenseDefinition;
    }
}
