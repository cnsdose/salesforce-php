<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CodeCoverageResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CodeLocation[]|null $dmlInfo
 * @property ID|null $id
 * @property CodeLocation[]|null $locationsNotCovered
 * @property CodeLocation[]|null $methodInfo
 * @property string|null $name
 * @property string|null $namespace
 * @property int|null $numLocations
 * @property int|null $numLocationsNotCovered
 * @property CodeLocation[]|null $soqlInfo
 * @property CodeLocation[]|null $soslInfo
 * @property string|null $type
 */
class CodeCoverageResult
{
    public static $classMap = [
        'dmlInfo' => [
            'multiple' => true,
            'type' => CodeLocation::class,
        ],
        'locationsNotCovered' => [
            'multiple' => true,
            'type' => CodeLocation::class,
        ],
        'methodInfo' => [
            'multiple' => true,
            'type' => CodeLocation::class,
        ],
        'soqlInfo' => [
            'multiple' => true,
            'type' => CodeLocation::class,
        ],
        'soslInfo' => [
            'multiple' => true,
            'type' => CodeLocation::class,
        ],
    ];

    public function setDmlInfo(array $dmlInfo)
    {
        $this->dmlInfo = $dmlInfo;
    }

    public function setId(ID $id)
    {
        $this->id = $id;
    }

    public function setLocationsNotCovered(array $locationsNotCovered)
    {
        $this->locationsNotCovered = $locationsNotCovered;
    }

    public function setMethodInfo(array $methodInfo)
    {
        $this->methodInfo = $methodInfo;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }

    public function setNumLocations(int $numLocations)
    {
        $this->numLocations = $numLocations;
    }

    public function setNumLocationsNotCovered(int $numLocationsNotCovered)
    {
        $this->numLocationsNotCovered = $numLocationsNotCovered;
    }

    public function setSoqlInfo(array $soqlInfo)
    {
        $this->soqlInfo = $soqlInfo;
    }

    public function setSoslInfo(array $soslInfo)
    {
        $this->soslInfo = $soslInfo;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
