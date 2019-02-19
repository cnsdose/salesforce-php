<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotInvocationMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $parameterName
 * @property string|null $type
 * @property string|null $value
 * @property string|null $variableName
 * @property string|null $variableType
 */
class BotInvocationMapping
{
    public static $classMap = [
    ];

    public function setParameterName(string $parameterName)
    {
        $this->parameterName = $parameterName;
    }

    public function setType(BotInvocationMappingType $type)
    {
        $this->type = $type->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public function setVariableName(string $variableName)
    {
        $this->variableName = $variableName;
    }

    public function setVariableType(ConversationVariableType $variableType)
    {
        $this->variableType = $variableType->getValue();
    }
}
