<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotVariableOperand
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $disableAutoFill
 * @property string|null $sourceName
 * @property string|null $sourceType
 * @property string|null $sourceValue
 * @property string|null $targetName
 * @property string|null $targetType
 */
class BotVariableOperand
{
    public static $classMap = [
    ];

    public function setDisableAutoFill(bool $disableAutoFill)
    {
        $this->disableAutoFill = $disableAutoFill;
    }

    public function setSourceName(string $sourceName)
    {
        $this->sourceName = $sourceName;
    }

    public function setSourceType(ConversationVariableOperandSourceType $sourceType)
    {
        $this->sourceType = $sourceType->getValue();
    }

    public function setSourceValue(string $sourceValue)
    {
        $this->sourceValue = $sourceValue;
    }

    public function setTargetName(string $targetName)
    {
        $this->targetName = $targetName;
    }

    public function setTargetType(ConversationVariableType $targetType)
    {
        $this->targetType = $targetType->getValue();
    }
}
