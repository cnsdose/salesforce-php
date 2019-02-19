<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApexClass
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property PackageVersion[]|null $packageVersions
 * @property string|null $status
 */
class ApexClass extends MetadataWithContent
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
