<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Letterhead
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $available
 * @property string|null $backgroundColor
 * @property string|null $bodyColor
 * @property LetterheadLine|null $bottomLine
 * @property string|null $description
 * @property LetterheadHeaderFooter|null $footer
 * @property LetterheadHeaderFooter|null $header
 * @property LetterheadLine|null $middleLine
 * @property string|null $name
 * @property LetterheadLine|null $topLine
 */
class Letterhead extends Metadata
{
    public static $classMap = [
        'bottomLine' => [
            'multiple' => false,
            'type' => LetterheadLine::class,
        ],
        'footer' => [
            'multiple' => false,
            'type' => LetterheadHeaderFooter::class,
        ],
        'header' => [
            'multiple' => false,
            'type' => LetterheadHeaderFooter::class,
        ],
        'middleLine' => [
            'multiple' => false,
            'type' => LetterheadLine::class,
        ],
        'topLine' => [
            'multiple' => false,
            'type' => LetterheadLine::class,
        ],
    ];

    public function setAvailable(bool $available)
    {
        $this->available = $available;
    }

    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function setBodyColor(string $bodyColor)
    {
        $this->bodyColor = $bodyColor;
    }

    public function setBottomLine(LetterheadLine $bottomLine)
    {
        $this->bottomLine = $bottomLine;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFooter(LetterheadHeaderFooter $footer)
    {
        $this->footer = $footer;
    }

    public function setHeader(LetterheadHeaderFooter $header)
    {
        $this->header = $header;
    }

    public function setMiddleLine(LetterheadLine $middleLine)
    {
        $this->middleLine = $middleLine;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setTopLine(LetterheadLine $topLine)
    {
        $this->topLine = $topLine;
    }
}
