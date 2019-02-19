<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChannelLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $enabledChannels
 * @property string|null $label
 * @property ChannelLayoutItem[]|null $layoutItems
 * @property string|null $recordType
 */
class ChannelLayout extends Metadata
{
    public static $classMap = [
        'layoutItems' => [
            'multiple' => true,
            'type' => ChannelLayoutItem::class,
        ],
    ];

    public function setEnabledChannels(array $enabledChannels)
    {
        $this->enabledChannels = $enabledChannels;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLayoutItems(array $layoutItems)
    {
        $this->layoutItems = $layoutItems;
    }

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }
}
