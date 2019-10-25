<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformEventChannelMember
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $eventChannel
 * @property string|null $selectedEntity
 */
class PlatformEventChannelMember extends Metadata
{
    public static $classMap = [
    ];

    public function setEventChannel(string $eventChannel)
    {
        $this->eventChannel = $eventChannel;
    }

    public function setSelectedEntity(string $selectedEntity)
    {
        $this->selectedEntity = $selectedEntity;
    }
}
