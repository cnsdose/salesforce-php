<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveAgentSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableLiveAgent
 */
class LiveAgentSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableLiveAgent(bool $enableLiveAgent)
    {
        $this->enableLiveAgent = $enableLiveAgent;
    }
}
