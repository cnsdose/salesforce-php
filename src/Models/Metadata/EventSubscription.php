<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EventSubscription
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property EventParameterMap[]|null $eventParameters
 * @property string|null $eventType
 * @property string|null $referenceData
 */
class EventSubscription extends Metadata
{
    public static $classMap = [
        'eventParameters' => [
            'multiple' => true,
            'type' => EventParameterMap::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setEventParameters(array $eventParameters)
    {
        $this->eventParameters = $eventParameters;
    }

    public function setEventType(string $eventType)
    {
        $this->eventType = $eventType;
    }

    public function setReferenceData(string $referenceData)
    {
        $this->referenceData = $referenceData;
    }
}
