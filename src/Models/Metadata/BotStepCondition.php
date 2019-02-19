<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotStepCondition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $leftOperandName
 * @property string|null $leftOperandType
 * @property string|null $operatorType
 * @property string|null $rightOperandValue
 */
class BotStepCondition
{
    public static $classMap = [
    ];

    public function setLeftOperandName(string $leftOperandName)
    {
        $this->leftOperandName = $leftOperandName;
    }

    public function setLeftOperandType(ConversationVariableType $leftOperandType)
    {
        $this->leftOperandType = $leftOperandType->getValue();
    }

    public function setOperatorType(BotStepConditionOperatorType $operatorType)
    {
        $this->operatorType = $operatorType->getValue();
    }

    public function setRightOperandValue(string $rightOperandValue)
    {
        $this->rightOperandValue = $rightOperandValue;
    }
}
