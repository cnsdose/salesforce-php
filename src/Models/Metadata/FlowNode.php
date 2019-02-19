<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowNode
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property int|null $locationX
 * @property int|null $locationY
 */
class FlowNode extends FlowElement
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLocationX(int $locationX)
    {
        $this->locationX = $locationX;
    }

    public function setLocationY(int $locationY)
    {
        $this->locationY = $locationY;
    }
}
