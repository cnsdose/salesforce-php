<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveTemplateBundle
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assetIcon
 * @property float|null $assetVersion
 * @property string|null $description
 * @property string|null $label
 * @property string|null $templateType
 */
class WaveTemplateBundle extends Metadata
{
    public static $classMap = [
    ];

    public function setAssetIcon(string $assetIcon)
    {
        $this->assetIcon = $assetIcon;
    }

    public function setAssetVersion(float $assetVersion)
    {
        $this->assetVersion = $assetVersion;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setTemplateType(string $templateType)
    {
        $this->templateType = $templateType;
    }
}
