<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformEventChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PlatformEventChannelSelectedEntity[]|null $channelMembers
 * @property string|null $channelType
 * @property string|null $label
 */
class PlatformEventChannel extends Metadata
{
    public static $classMap = [
        'channelMembers' => [
            'multiple' => true,
            'type' => PlatformEventChannelSelectedEntity::class,
        ],
    ];

    public function setChannelMembers(array $channelMembers)
    {
        $this->channelMembers = $channelMembers;
    }

    public function setChannelType(PlatformEventChannelType $channelType)
    {
        $this->channelType = $channelType->getValue();
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
