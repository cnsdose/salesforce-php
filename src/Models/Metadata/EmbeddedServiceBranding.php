<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceBranding
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $contrastInvertedColor
 * @property string|null $contrastPrimaryColor
 * @property string|null $embeddedServiceConfig
 * @property string|null $font
 * @property int|null $height
 * @property string|null $masterLabel
 * @property string|null $navBarColor
 * @property string|null $primaryColor
 * @property string|null $secondaryColor
 * @property int|null $width
 */
class EmbeddedServiceBranding extends Metadata
{
    public static $classMap = [
    ];

    public function setContrastInvertedColor(string $contrastInvertedColor)
    {
        $this->contrastInvertedColor = $contrastInvertedColor;
    }

    public function setContrastPrimaryColor(string $contrastPrimaryColor)
    {
        $this->contrastPrimaryColor = $contrastPrimaryColor;
    }

    public function setEmbeddedServiceConfig(string $embeddedServiceConfig)
    {
        $this->embeddedServiceConfig = $embeddedServiceConfig;
    }

    public function setFont(string $font)
    {
        $this->font = $font;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setNavBarColor(string $navBarColor)
    {
        $this->navBarColor = $navBarColor;
    }

    public function setPrimaryColor(string $primaryColor)
    {
        $this->primaryColor = $primaryColor;
    }

    public function setSecondaryColor(string $secondaryColor)
    {
        $this->secondaryColor = $secondaryColor;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
