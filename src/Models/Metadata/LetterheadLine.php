<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LetterheadLine
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $color
 * @property int|null $height
 */
class LetterheadLine
{
    public static $classMap = [
    ];

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }
}
