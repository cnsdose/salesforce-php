<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property string|null $description
 * @property string|null $label
 * @property PackageVersion[]|null $packageVersions
 */
class ApexComponent extends MetadataWithContent
{
    public static $classMap = [
        'packageVersions' => [
            'multiple' => true,
            'type' => PackageVersion::class,
        ],
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
    }
}
