<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveMessageSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableLiveMessage
 */
class LiveMessageSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableLiveMessage(bool $enableLiveMessage)
    {
        $this->enableLiveMessage = $enableLiveMessage;
    }
}
