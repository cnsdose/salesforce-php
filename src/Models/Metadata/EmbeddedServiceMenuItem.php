<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmbeddedServiceMenuItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $channel
 * @property string|null $channelType
 * @property int|null $displayOrder
 * @property string|null $phoneNumber
 */
class EmbeddedServiceMenuItem
{
    public static $classMap = [
    ];

    public function setChannel(string $channel)
    {
        $this->channel = $channel;
    }

    public function setChannelType(EmbeddedServiceChannelType $channelType)
    {
        $this->channelType = $channelType->getValue();
    }

    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }

    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
}
