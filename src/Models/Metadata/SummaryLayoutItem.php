<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SummaryLayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customLink
 * @property string|null $field
 * @property int|null $posX
 * @property int|null $posY
 * @property int|null $posZ
 */
class SummaryLayoutItem
{
    public static $classMap = [
    ];

    public function setCustomLink(string $customLink)
    {
        $this->customLink = $customLink;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setPosX(int $posX)
    {
        $this->posX = $posX;
    }

    public function setPosY(int $posY)
    {
        $this->posY = $posY;
    }

    public function setPosZ(int $posZ)
    {
        $this->posZ = $posZ;
    }
}
