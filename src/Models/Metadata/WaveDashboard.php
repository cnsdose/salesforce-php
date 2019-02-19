<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveDashboard
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $application
 * @property string|null $description
 * @property string|null $masterLabel
 * @property string|null $templateAssetSourceName
 */
class WaveDashboard extends MetadataWithContent
{
    public static $classMap = [
    ];

    public function setApplication(string $application)
    {
        $this->application = $application;
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
}
