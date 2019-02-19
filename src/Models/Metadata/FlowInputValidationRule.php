<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowInputValidationRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $errorMessage
 * @property string|null $formulaExpression
 */
class FlowInputValidationRule
{
    public static $classMap = [
    ];

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setFormulaExpression(string $formulaExpression)
    {
        $this->formulaExpression = $formulaExpression;
    }
}
