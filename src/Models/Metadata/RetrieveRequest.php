<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RetrieveRequest
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property string[]|null $packageNames
 * @property bool|null $singlePackage
 * @property string[]|null $specificFiles
 * @property Package|null $unpackaged
 */
class RetrieveRequest
{
    public static $classMap = [
        'unpackaged' => [
            'multiple' => false,
            'type' => Package::class,
        ],
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setPackageNames(array $packageNames)
    {
        $this->packageNames = $packageNames;
    }

    public function setSinglePackage(bool $singlePackage)
    {
        $this->singlePackage = $singlePackage;
    }

    public function setSpecificFiles(array $specificFiles)
    {
        $this->specificFiles = $specificFiles;
    }

    public function setUnpackaged(Package $unpackaged)
    {
        $this->unpackaged = $unpackaged;
    }
}
