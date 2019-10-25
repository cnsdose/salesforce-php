<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableBots
 */
class BotSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableBots(bool $enableBots)
    {
        $this->enableBots = $enableBots;
    }
}
