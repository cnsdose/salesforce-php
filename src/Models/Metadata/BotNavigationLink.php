<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotNavigationLink
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 * @property string|null $targetBotDialog
 */
class BotNavigationLink
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setTargetBotDialog(string $targetBotDialog)
    {
        $this->targetBotDialog = $targetBotDialog;
    }
}
