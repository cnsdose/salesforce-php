<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppAttribute
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $formula
 * @property string|null $key
 */
class ConnectedAppAttribute
{
    public static $classMap = [
    ];

    public function setFormula(string $formula)
    {
        $this->formula = $formula;
    }

    public function setKey(string $key)
    {
        $this->key = $key;
    }
}
