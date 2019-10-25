<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotStep
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $booleanFilter
 * @property BotInvocation|null $botInvocation
 * @property BotMessage[]|null $botMessages
 * @property BotNavigation|null $botNavigation
 * @property BotStepCondition[]|null $botStepConditions
 * @property BotStep[]|null $botSteps
 * @property BotVariableOperation|null $botVariableOperation
 * @property ConversationRecordLookup|null $conversationRecordLookup
 * @property ConversationSystemMessage|null $conversationSystemMessage
 * @property string|null $type
 */
class BotStep
{
    public static $classMap = [
        'botInvocation' => [
            'multiple' => false,
            'type' => BotInvocation::class,
        ],
        'botMessages' => [
            'multiple' => true,
            'type' => BotMessage::class,
        ],
        'botNavigation' => [
            'multiple' => false,
            'type' => BotNavigation::class,
        ],
        'botStepConditions' => [
            'multiple' => true,
            'type' => BotStepCondition::class,
        ],
        'botSteps' => [
            'multiple' => true,
            'type' => BotStep::class,
        ],
        'botVariableOperation' => [
            'multiple' => false,
            'type' => BotVariableOperation::class,
        ],
        'conversationRecordLookup' => [
            'multiple' => false,
            'type' => ConversationRecordLookup::class,
        ],
        'conversationSystemMessage' => [
            'multiple' => false,
            'type' => ConversationSystemMessage::class,
        ],
    ];

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setBotInvocation(BotInvocation $botInvocation)
    {
        $this->botInvocation = $botInvocation;
    }

    public function setBotMessages(array $botMessages)
    {
        $this->botMessages = $botMessages;
    }

    public function setBotNavigation(BotNavigation $botNavigation)
    {
        $this->botNavigation = $botNavigation;
    }

    public function setBotStepConditions(array $botStepConditions)
    {
        $this->botStepConditions = $botStepConditions;
    }

    public function setBotSteps(array $botSteps)
    {
        $this->botSteps = $botSteps;
    }

    public function setBotVariableOperation(BotVariableOperation $botVariableOperation)
    {
        $this->botVariableOperation = $botVariableOperation;
    }

    public function setConversationRecordLookup(ConversationRecordLookup $conversationRecordLookup)
    {
        $this->conversationRecordLookup = $conversationRecordLookup;
    }

    public function setConversationSystemMessage(ConversationSystemMessage $conversationSystemMessage)
    {
        $this->conversationSystemMessage = $conversationSystemMessage;
    }

    public function setType(BotStepType $type)
    {
        $this->type = $type->getValue();
    }
}
