<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningBoltImages
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $image
 * @property int|null $order
 */
class LightningBoltImages
{
    public static $classMap = [
    ];

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setOrder(int $order)
    {
        $this->order = $order;
    }
}
