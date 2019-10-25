<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveAgentSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableLiveAgent
 * @property bool|null $enableQuickTextEnabled
 */
class LiveAgentSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableLiveAgent(bool $enableLiveAgent)
    {
        $this->enableLiveAgent = $enableLiveAgent;
    }

    public function setEnableQuickTextEnabled(bool $enableQuickTextEnabled)
    {
        $this->enableQuickTextEnabled = $enableQuickTextEnabled;
    }
}
