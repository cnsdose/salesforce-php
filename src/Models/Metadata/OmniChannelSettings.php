<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OmniChannelSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableOmniChannel
 * @property bool|null $enableOmniSkillsRouting
 */
class OmniChannelSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableOmniChannel(bool $enableOmniChannel)
    {
        $this->enableOmniChannel = $enableOmniChannel;
    }

    public function setEnableOmniSkillsRouting(bool $enableOmniSkillsRouting)
    {
        $this->enableOmniSkillsRouting = $enableOmniSkillsRouting;
    }
}
