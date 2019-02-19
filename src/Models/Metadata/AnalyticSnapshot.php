<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AnalyticSnapshot
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $groupColumn
 * @property AnalyticSnapshotMapping[]|null $mappings
 * @property string|null $name
 * @property string|null $runningUser
 * @property string|null $sourceReport
 * @property string|null $targetObject
 */
class AnalyticSnapshot extends Metadata
{
    public static $classMap = [
        'mappings' => [
            'multiple' => true,
            'type' => AnalyticSnapshotMapping::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setGroupColumn(string $groupColumn)
    {
        $this->groupColumn = $groupColumn;
    }

    public function setMappings(array $mappings)
    {
        $this->mappings = $mappings;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRunningUser(string $runningUser)
    {
        $this->runningUser = $runningUser;
    }

    public function setSourceReport(string $sourceReport)
    {
        $this->sourceReport = $sourceReport;
    }

    public function setTargetObject(string $targetObject)
    {
        $this->targetObject = $targetObject;
    }
}
