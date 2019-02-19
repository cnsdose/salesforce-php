<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionDeploymentChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $channel
 * @property RecordActionDefaultItem[]|null $channelItems
 * @property bool|null $isAutopopEnabled
 */
class RecordActionDeploymentChannel
{
    public static $classMap = [
        'channelItems' => [
            'multiple' => true,
            'type' => RecordActionDefaultItem::class,
        ],
    ];

    public function setChannel(ChannelSource $channel)
    {
        $this->channel = $channel->getValue();
    }

    public function setChannelItems(array $channelItems)
    {
        $this->channelItems = $channelItems;
    }

    public function setIsAutopopEnabled(bool $isAutopopEnabled)
    {
        $this->isAutopopEnabled = $isAutopopEnabled;
    }
}
