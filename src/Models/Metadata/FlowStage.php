<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowStage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $isActive
 * @property string|null $label
 * @property int|null $stageOrder
 */
class FlowStage extends FlowElement
{
    public static $classMap = [
    ];

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setStageOrder(int $stageOrder)
    {
        $this->stageOrder = $stageOrder;
    }
}
