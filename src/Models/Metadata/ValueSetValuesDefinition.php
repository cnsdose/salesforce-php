<?php
/**
 * Created automatically by salesforce-sdk.
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
    public static $classMap = [
        'value' => [
            'multiple' => true,
            'type' => CustomValue::class,
        ],
    ];

    public function setSorted(bool $sorted)
    {
        $this->sorted = $sorted;
    }

    public function setValue(array $value)
    {
        $this->value = $value;
    }
}
