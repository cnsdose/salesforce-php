<?php

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
