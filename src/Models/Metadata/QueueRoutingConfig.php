<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QueueRoutingConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $capacityPercentage
 * @property float|null $capacityWeight
 * @property bool|null $isAttributeBased
 * @property string|null $label
 * @property int|null $pushTimeout
 * @property string|null $queueOverflowAssignee
 * @property string|null $routingModel
 * @property int|null $routingPriority
 * @property string|null $userOverflowAssignee
 */
class QueueRoutingConfig extends Metadata
{
    public static $classMap = [
    ];

    public function setCapacityPercentage(float $capacityPercentage)
    {
        $this->capacityPercentage = $capacityPercentage;
    }

    public function setCapacityWeight(float $capacityWeight)
    {
        $this->capacityWeight = $capacityWeight;
    }

    public function setIsAttributeBased(bool $isAttributeBased)
    {
        $this->isAttributeBased = $isAttributeBased;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPushTimeout(int $pushTimeout)
    {
        $this->pushTimeout = $pushTimeout;
    }

    public function setQueueOverflowAssignee(string $queueOverflowAssignee)
    {
        $this->queueOverflowAssignee = $queueOverflowAssignee;
    }

    public function setRoutingModel(RoutingModel $routingModel)
    {
        $this->routingModel = $routingModel->getValue();
    }

    public function setRoutingPriority(int $routingPriority)
    {
        $this->routingPriority = $routingPriority;
    }

    public function setUserOverflowAssignee(string $userOverflowAssignee)
    {
        $this->userOverflowAssignee = $userOverflowAssignee;
    }
}
