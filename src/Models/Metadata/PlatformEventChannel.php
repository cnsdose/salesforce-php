<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformEventChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $channelType
 * @property string|null $label
 */
class PlatformEventChannel extends Metadata
{
    public static $classMap = [
    ];

    public function setChannelType(PlatformEventChannelType $channelType)
    {
        $this->channelType = $channelType->getValue();
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
