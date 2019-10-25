<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MapExpression
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $expression
 * @property string|null $name
 * @property string|null $type
 */
class MapExpression
{
    public static $classMap = [
    ];

    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
