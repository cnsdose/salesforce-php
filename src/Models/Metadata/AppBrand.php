<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppBrand
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $footerColor
 * @property string|null $headerColor
 * @property string|null $logo
 * @property int|null $logoVersion
 * @property bool|null $shouldOverrideOrgTheme
 */
class AppBrand
{
    public static $classMap = [
    ];

    public function setFooterColor(string $footerColor)
    {
        $this->footerColor = $footerColor;
    }

    public function setHeaderColor(string $headerColor)
    {
        $this->headerColor = $headerColor;
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    public function setLogoVersion(int $logoVersion)
    {
        $this->logoVersion = $logoVersion;
    }

    public function setShouldOverrideOrgTheme(bool $shouldOverrideOrgTheme)
    {
        $this->shouldOverrideOrgTheme = $shouldOverrideOrgTheme;
    }
}
