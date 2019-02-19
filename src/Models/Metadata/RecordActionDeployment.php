<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionDeployment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RecordActionDeploymentChannel[]|null $channelConfigurations
 * @property string|null $masterLabel
 * @property RecordActionSelectableItem[]|null $selectableItems
 */
class RecordActionDeployment extends Metadata
{
    public static $classMap = [
        'channelConfigurations' => [
            'multiple' => true,
            'type' => RecordActionDeploymentChannel::class,
        ],
        'selectableItems' => [
            'multiple' => true,
            'type' => RecordActionSelectableItem::class,
        ],
    ];

    public function setChannelConfigurations(array $channelConfigurations)
    {
        $this->channelConfigurations = $channelConfigurations;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSelectableItems(array $selectableItems)
    {
        $this->selectableItems = $selectableItems;
    }
}
