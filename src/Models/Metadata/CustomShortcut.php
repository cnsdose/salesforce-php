<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomShortcut
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $eventName
 */
class CustomShortcut extends DefaultShortcut
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEventName(string $eventName)
    {
        $this->eventName = $eventName;
    }
}
