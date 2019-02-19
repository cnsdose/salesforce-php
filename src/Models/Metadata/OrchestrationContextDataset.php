<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrchestrationContextDataset
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $datasetType
 * @property string|null $orchestrationDataset
 */
class OrchestrationContextDataset
{
    public static $classMap = [
    ];

    public function setDatasetType(string $datasetType)
    {
        $this->datasetType = $datasetType;
    }

    public function setOrchestrationDataset(string $orchestrationDataset)
    {
        $this->orchestrationDataset = $orchestrationDataset;
    }
}
