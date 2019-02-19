<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveApplication
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assetIcon
 * @property string|null $description
 * @property string|null $folder
 * @property string|null $masterLabel
 * @property FolderShare[]|null $shares
 * @property string|null $templateOrigin
 * @property string|null $templateVersion
 */
class WaveApplication extends Metadata
{
    public static $classMap = [
        'shares' => [
            'multiple' => true,
            'type' => FolderShare::class,
        ],
    ];

    public function setAssetIcon(string $assetIcon)
    {
        $this->assetIcon = $assetIcon;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFolder(string $folder)
    {
        $this->folder = $folder;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setShares(array $shares)
    {
        $this->shares = $shares;
    }

    public function setTemplateOrigin(string $templateOrigin)
    {
        $this->templateOrigin = $templateOrigin;
    }

    public function setTemplateVersion(string $templateVersion)
    {
        $this->templateVersion = $templateVersion;
    }
}
