<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotDialog
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $botDialogGroup
 * @property BotStep[]|null $botSteps
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $label
 * @property string|null $mlIntent
 * @property bool|null $showInFooterMenu
 */
class BotDialog
{
    public static $classMap = [
        'botSteps' => [
            'multiple' => true,
            'type' => BotStep::class,
        ],
    ];

    public function setBotDialogGroup(string $botDialogGroup)
    {
        $this->botDialogGroup = $botDialogGroup;
    }

    public function setBotSteps(array $botSteps)
    {
        $this->botSteps = $botSteps;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setMlIntent(string $mlIntent)
    {
        $this->mlIntent = $mlIntent;
    }

    public function setShowInFooterMenu(bool $showInFooterMenu)
    {
        $this->showInFooterMenu = $showInFooterMenu;
    }
}
