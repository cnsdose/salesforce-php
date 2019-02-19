<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LetterheadHeaderFooter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $backgroundColor
 * @property int|null $height
 * @property string|null $horizontalAlignment
 * @property string|null $logo
 * @property string|null $verticalAlignment
 */
class LetterheadHeaderFooter
{
    public static $classMap = [
    ];

    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setHorizontalAlignment(LetterheadHorizontalAlignment $horizontalAlignment)
    {
        $this->horizontalAlignment = $horizontalAlignment->getValue();
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    public function setVerticalAlignment(LetterheadVerticalAlignment $verticalAlignment)
    {
        $this->verticalAlignment = $verticalAlignment->getValue();
    }
}
