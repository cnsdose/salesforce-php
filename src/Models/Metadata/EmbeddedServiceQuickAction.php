<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceQuickAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $embeddedServiceLiveAgent
 * @property int|null $order
 * @property string|null $quickActionDefinition
 * @property string|null $quickActionType
 */
class EmbeddedServiceQuickAction
{
    public static $classMap = [
    ];

    public function setEmbeddedServiceLiveAgent(string $embeddedServiceLiveAgent)
    {
        $this->embeddedServiceLiveAgent = $embeddedServiceLiveAgent;
    }

    public function setOrder(int $order)
    {
        $this->order = $order;
    }

    public function setQuickActionDefinition(string $quickActionDefinition)
    {
        $this->quickActionDefinition = $quickActionDefinition;
    }

    public function setQuickActionType(EmbeddedServiceQuickActionType $quickActionType)
    {
        $this->quickActionType = $quickActionType->getValue();
    }
}
