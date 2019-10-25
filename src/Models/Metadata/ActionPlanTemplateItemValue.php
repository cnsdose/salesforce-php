<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionPlanTemplateItemValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $valueFormula
 * @property string|null $valueLiteral
 */
class ActionPlanTemplateItemValue
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValueFormula(string $valueFormula)
    {
        $this->valueFormula = $valueFormula;
    }

    public function setValueLiteral(string $valueLiteral)
    {
        $this->valueLiteral = $valueLiteral;
    }
}
