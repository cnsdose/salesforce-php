<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotVersion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property BotDialogGroup[]|null $botDialogGroups
 * @property BotDialog[]|null $botDialogs
 * @property ConversationVariable[]|null $conversationVariables
 * @property string|null $entryDialog
 * @property string|null $mainMenuDialog
 * @property int|null $responseDelayMilliseconds
 */
class BotVersion extends Metadata
{
    public static $classMap = [
        'botDialogGroups' => [
            'multiple' => true,
            'type' => BotDialogGroup::class,
        ],
        'botDialogs' => [
            'multiple' => true,
            'type' => BotDialog::class,
        ],
        'conversationVariables' => [
            'multiple' => true,
            'type' => ConversationVariable::class,
        ],
    ];

    public function setBotDialogGroups(array $botDialogGroups)
    {
        $this->botDialogGroups = $botDialogGroups;
    }

    public function setBotDialogs(array $botDialogs)
    {
        $this->botDialogs = $botDialogs;
    }

    public function setConversationVariables(array $conversationVariables)
    {
        $this->conversationVariables = $conversationVariables;
    }

    public function setEntryDialog(string $entryDialog)
    {
        $this->entryDialog = $entryDialog;
    }

    public function setMainMenuDialog(string $mainMenuDialog)
    {
        $this->mainMenuDialog = $mainMenuDialog;
    }

    public function setResponseDelayMilliseconds(int $responseDelayMilliseconds)
    {
        $this->responseDelayMilliseconds = $responseDelayMilliseconds;
    }
}
