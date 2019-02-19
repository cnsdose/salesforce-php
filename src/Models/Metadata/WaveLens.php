<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveLens
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $application
 * @property string[]|null $datasets
 * @property string|null $description
 * @property string|null $masterLabel
 * @property string|null $templateAssetSourceName
 * @property string|null $visualizationType
 */
class WaveLens extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setApplication(string $application)
    {
        $this->application = $application;
    }

    public function setDatasets(array $datasets)
    {
        $this->datasets = $datasets;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setTemplateAssetSourceName(string $templateAssetSourceName)
    {
        $this->templateAssetSourceName = $templateAssetSourceName;
    }

    public function setVisualizationType(string $visualizationType)
    {
        $this->visualizationType = $visualizationType;
    }
}
