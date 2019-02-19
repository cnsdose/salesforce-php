<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdDimensionMember
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $color
 * @property string|null $label
 * @property string|null $member
 * @property int|null $sortIndex
 */
class WaveXmdDimensionMember
{
    public static $classMap = [
    ];

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMember(string $member)
    {
        $this->member = $member;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
}
