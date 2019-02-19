<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PackageVersion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $majorNumber
 * @property int|null $minorNumber
 * @property string|null $namespace
 */
class PackageVersion
{
    public static $classMap = [
    ];

    public function setMajorNumber(int $majorNumber)
    {
        $this->majorNumber = $majorNumber;
    }

    public function setMinorNumber(int $minorNumber)
    {
        $this->minorNumber = $minorNumber;
    }

    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }
}
