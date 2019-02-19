<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdFormattingBin
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $bin
 * @property string|null $formatValue
 * @property string|null $label
 * @property int|null $sortIndex
 */
class WaveXmdFormattingBin
{
    public static $classMap = [
    ];

    public function setBin(string $bin)
    {
        $this->bin = $bin;
    }

    public function setFormatValue(string $formatValue)
    {
        $this->formatValue = $formatValue;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
}
