<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningExperienceTheme
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultBrandingSet
 * @property string|null $description
 * @property string|null $masterLabel
 * @property bool|null $shouldOverrideLoadingImage
 */
class LightningExperienceTheme extends Metadata
{
    public static $classMap = [
    ];

    public function setDefaultBrandingSet(string $defaultBrandingSet)
    {
        $this->defaultBrandingSet = $defaultBrandingSet;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setShouldOverrideLoadingImage(bool $shouldOverrideLoadingImage)
    {
        $this->shouldOverrideLoadingImage = $shouldOverrideLoadingImage;
    }
}
