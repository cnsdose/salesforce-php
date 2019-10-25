<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OmniChannelSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableOmniAutoLoginPrompt
 * @property bool|null $enableOmniChannel
 * @property bool|null $enableOmniSecondaryRoutingPriority
 * @property bool|null $enableOmniSkillsRouting
 */
class OmniChannelSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableOmniAutoLoginPrompt(bool $enableOmniAutoLoginPrompt)
    {
        $this->enableOmniAutoLoginPrompt = $enableOmniAutoLoginPrompt;
    }

    public function setEnableOmniChannel(bool $enableOmniChannel)
    {
        $this->enableOmniChannel = $enableOmniChannel;
    }

    public function setEnableOmniSecondaryRoutingPriority(bool $enableOmniSecondaryRoutingPriority)
    {
        $this->enableOmniSecondaryRoutingPriority = $enableOmniSecondaryRoutingPriority;
    }

    public function setEnableOmniSkillsRouting(bool $enableOmniSkillsRouting)
    {
        $this->enableOmniSkillsRouting = $enableOmniSkillsRouting;
    }
}
