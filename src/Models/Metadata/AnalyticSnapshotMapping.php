<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AnalyticSnapshotMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $aggregateType
 * @property string|null $sourceField
 * @property string|null $sourceType
 * @property string|null $targetField
 */
class AnalyticSnapshotMapping
{
    public static $classMap = [
    ];

    public function setAggregateType(ReportSummaryType $aggregateType)
    {
        $this->aggregateType = $aggregateType->getValue();
    }

    public function setSourceField(string $sourceField)
    {
        $this->sourceField = $sourceField;
    }

    public function setSourceType(ReportJobSourceTypes $sourceType)
    {
        $this->sourceType = $sourceType->getValue();
    }

    public function setTargetField(string $targetField)
    {
        $this->targetField = $targetField;
    }
}
