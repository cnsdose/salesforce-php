<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotVariableOperation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property BotInvocation|null $botInvocation
 * @property BotMessage[]|null $botMessages
 * @property BotQuickReplyOption[]|null $botQuickReplyOptions
 * @property BotVariableOperand[]|null $botVariableOperands
 * @property BotNavigation|null $invalidInputBotNavigation
 * @property string|null $quickReplyOptionTemplate
 * @property string|null $quickReplyType
 * @property string|null $quickReplyWidgetType
 * @property string|null $sourceVariableName
 * @property string|null $sourceVariableType
 * @property string|null $type
 */
class BotVariableOperation
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
        'botQuickReplyOptions' => [
            'multiple' => true,
            'type' => BotQuickReplyOption::class,
        ],
        'botVariableOperands' => [
            'multiple' => true,
            'type' => BotVariableOperand::class,
        ],
        'invalidInputBotNavigation' => [
            'multiple' => false,
            'type' => BotNavigation::class,
        ],
    ];

    public function setBotInvocation(BotInvocation $botInvocation)
    {
        $this->botInvocation = $botInvocation;
    }

    public function setBotMessages(array $botMessages)
    {
        $this->botMessages = $botMessages;
    }

    public function setBotQuickReplyOptions(array $botQuickReplyOptions)
    {
        $this->botQuickReplyOptions = $botQuickReplyOptions;
    }

    public function setBotVariableOperands(array $botVariableOperands)
    {
        $this->botVariableOperands = $botVariableOperands;
    }

    public function setInvalidInputBotNavigation(BotNavigation $invalidInputBotNavigation)
    {
        $this->invalidInputBotNavigation = $invalidInputBotNavigation;
    }

    public function setQuickReplyOptionTemplate(string $quickReplyOptionTemplate)
    {
        $this->quickReplyOptionTemplate = $quickReplyOptionTemplate;
    }

    public function setQuickReplyType(BotQuickReplyType $quickReplyType)
    {
        $this->quickReplyType = $quickReplyType->getValue();
    }

    public function setQuickReplyWidgetType(BotWidgetType $quickReplyWidgetType)
    {
        $this->quickReplyWidgetType = $quickReplyWidgetType->getValue();
    }

    public function setSourceVariableName(string $sourceVariableName)
    {
        $this->sourceVariableName = $sourceVariableName;
    }

    public function setSourceVariableType(ConversationVariableType $sourceVariableType)
    {
        $this->sourceVariableType = $sourceVariableType->getValue();
    }

    public function setType(BotVariableOperationType $type)
    {
        $this->type = $type->getValue();
    }
}
