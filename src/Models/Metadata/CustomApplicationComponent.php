<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomApplicationComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $buttonIconUrl
 * @property string|null $buttonStyle
 * @property string|null $buttonText
 * @property int|null $buttonWidth
 * @property int|null $height
 * @property bool|null $isHeightFixed
 * @property bool|null $isHidden
 * @property bool|null $isWidthFixed
 * @property string|null $visualforcePage
 * @property int|null $width
 */
class CustomApplicationComponent extends Metadata
{
    public static $classMap = [
    ];

    public function setButtonIconUrl(string $buttonIconUrl)
    {
        $this->buttonIconUrl = $buttonIconUrl;
    }

    public function setButtonStyle(string $buttonStyle)
    {
        $this->buttonStyle = $buttonStyle;
    }

    public function setButtonText(string $buttonText)
    {
        $this->buttonText = $buttonText;
    }

    public function setButtonWidth(int $buttonWidth)
    {
        $this->buttonWidth = $buttonWidth;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setIsHeightFixed(bool $isHeightFixed)
    {
        $this->isHeightFixed = $isHeightFixed;
    }

    public function setIsHidden(bool $isHidden)
    {
        $this->isHidden = $isHidden;
    }

    public function setIsWidthFixed(bool $isWidthFixed)
    {
        $this->isWidthFixed = $isWidthFixed;
    }

    public function setVisualforcePage(string $visualforcePage)
    {
        $this->visualforcePage = $visualforcePage;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
