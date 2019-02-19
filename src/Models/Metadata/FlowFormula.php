<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowFormula
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataType
 * @property string|null $expression
 * @property int|null $scale
 */
class FlowFormula extends FlowElement
{
    public static $classMap = [
    ];

    public function setDataType(FlowDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }

    public function setScale(int $scale)
    {
        $this->scale = $scale;
    }
}
