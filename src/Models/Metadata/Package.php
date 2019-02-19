<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Package
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apiAccessLevel
 * @property string|null $description
 * @property string|null $namespacePrefix
 * @property ProfileObjectPermissions[]|null $objectPermissions
 * @property string|null $packageType
 * @property string|null $postInstallClass
 * @property string|null $setupWeblink
 * @property PackageTypeMembers[]|null $types
 * @property string|null $uninstallClass
 * @property string|null $version
 */
class Package extends Metadata
{
    public static $classMap = [
        'objectPermissions' => [
            'multiple' => true,
            'type' => ProfileObjectPermissions::class,
        ],
        'types' => [
            'multiple' => true,
            'type' => PackageTypeMembers::class,
        ],
    ];

    public function setApiAccessLevel(APIAccessLevel $apiAccessLevel)
    {
        $this->apiAccessLevel = $apiAccessLevel->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setNamespacePrefix(string $namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
    }

    public function setObjectPermissions(array $objectPermissions)
    {
        $this->objectPermissions = $objectPermissions;
    }

    public function setPackageType(string $packageType)
    {
        $this->packageType = $packageType;
    }

    public function setPostInstallClass(string $postInstallClass)
    {
        $this->postInstallClass = $postInstallClass;
    }

    public function setSetupWeblink(string $setupWeblink)
    {
        $this->setupWeblink = $setupWeblink;
    }

    public function setTypes(array $types)
    {
        $this->types = $types;
    }

    public function setUninstallClass(string $uninstallClass)
    {
        $this->uninstallClass = $uninstallClass;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
