<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $formula
 * @property string|null $literalValue
 */
class FieldOverride
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setLiteralValue(string $literalValue)
    {
        $this->literalValue = $literalValue;
    }
}
