<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationSystemMessageMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $mappingType
 * @property string|null $parameterType
 * @property string|null $variableName
 */
class ConversationSystemMessageMapping
{
    public static $classMap = [
    ];

    public function setMappingType(ConversationMappingType $mappingType)
    {
        $this->mappingType = $mappingType->getValue();
    }

    public function setParameterType(ConversationSystemMessageParamType $parameterType)
    {
        $this->parameterType = $parameterType->getValue();
    }

    public function setVariableName(string $variableName)
    {
        $this->variableName = $variableName;
    }
}
