<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexTrigger
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property PackageVersion[]|null $packageVersions
 * @property string|null $status
 */
class ApexTrigger extends MetadataWithContent
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

    public function setPackageVersions(array $packageVersions)
    {
        $this->packageVersions = $packageVersions;
    }

    public function setStatus(ApexCodeUnitStatus $status)
    {
        $this->status = $status->getValue();
    }
}
