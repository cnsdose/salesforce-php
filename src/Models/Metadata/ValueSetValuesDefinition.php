<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:23 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ValueSetValuesDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $sorted
 * @property CustomValue[]|null $value
 */
class ValueSetValuesDefinition
{
    public function setSorted(bool $sorted)
    {
        $this->sorted = $sorted;
    }

    public function setValue(array $value)
    {
        $this->value = $value;
    }
}
