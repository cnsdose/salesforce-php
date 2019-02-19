<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ServicePresenceStatus
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ServiceChannelStatus|null $channels
 * @property string|null $label
 */
class ServicePresenceStatus extends Metadata
{
    public static $classMap = [
        'channels' => [
            'multiple' => false,
            'type' => ServiceChannelStatus::class,
        ],
    ];

    public function setChannels(ServiceChannelStatus $channels)
    {
        $this->channels = $channels;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
