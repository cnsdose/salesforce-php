<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SummaryLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $masterLabel
 * @property int|null $sizeX
 * @property int|null $sizeY
 * @property int|null $sizeZ
 * @property SummaryLayoutItem[]|null $summaryLayoutItems
 * @property string|null $summaryLayoutStyle
 */
class SummaryLayout
{
    public static $classMap = [
        'summaryLayoutItems' => [
            'multiple' => true,
            'type' => SummaryLayoutItem::class,
        ],
    ];

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSizeX(int $sizeX)
    {
        $this->sizeX = $sizeX;
    }

    public function setSizeY(int $sizeY)
    {
        $this->sizeY = $sizeY;
    }

    public function setSizeZ(int $sizeZ)
    {
        $this->sizeZ = $sizeZ;
    }

    public function setSummaryLayoutItems(array $summaryLayoutItems)
    {
        $this->summaryLayoutItems = $summaryLayoutItems;
    }

    public function setSummaryLayoutStyle(SummaryLayoutStyle $summaryLayoutStyle)
    {
        $this->summaryLayoutStyle = $summaryLayoutStyle->getValue();
    }
}
