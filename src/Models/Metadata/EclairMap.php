<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EclairMap
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $boundingBoxBottom
 * @property float|null $boundingBoxLeft
 * @property float|null $boundingBoxRight
 * @property float|null $boundingBoxTop
 * @property string|null $mapLabel
 * @property string|null $mapName
 * @property string|null $projection
 */
class EclairMap
{
    public static $classMap = [
    ];

    public function setBoundingBoxBottom(float $boundingBoxBottom)
    {
        $this->boundingBoxBottom = $boundingBoxBottom;
    }

    public function setBoundingBoxLeft(float $boundingBoxLeft)
    {
        $this->boundingBoxLeft = $boundingBoxLeft;
    }

    public function setBoundingBoxRight(float $boundingBoxRight)
    {
        $this->boundingBoxRight = $boundingBoxRight;
    }

    public function setBoundingBoxTop(float $boundingBoxTop)
    {
        $this->boundingBoxTop = $boundingBoxTop;
    }

    public function setMapLabel(string $mapLabel)
    {
        $this->mapLabel = $mapLabel;
    }

    public function setMapName(string $mapName)
    {
        $this->mapName = $mapName;
    }

    public function setProjection(string $projection)
    {
        $this->projection = $projection;
    }
}
