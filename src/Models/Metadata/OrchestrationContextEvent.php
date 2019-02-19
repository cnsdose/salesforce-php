<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrchestrationContextEvent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $eventType
 * @property string|null $orchestrationEvent
 * @property string|null $platformEvent
 * @property string|null $platformEventPrimaryKey
 */
class OrchestrationContextEvent
{
    public static $classMap = [
    ];

    public function setEventType(string $eventType)
    {
        $this->eventType = $eventType;
    }

    public function setOrchestrationEvent(string $orchestrationEvent)
    {
        $this->orchestrationEvent = $orchestrationEvent;
    }

    public function setPlatformEvent(string $platformEvent)
    {
        $this->platformEvent = $platformEvent;
    }

    public function setPlatformEventPrimaryKey(string $platformEventPrimaryKey)
    {
        $this->platformEventPrimaryKey = $platformEventPrimaryKey;
    }
}
