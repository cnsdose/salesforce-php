<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StandardValueSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $groupingStringEnum
 * @property bool|null $sorted
 * @property StandardValue[]|null $standardValue
 */
class StandardValueSet extends Metadata
{
    public static $classMap = [
        'standardValue' => [
            'multiple' => true,
            'type' => StandardValue::class,
        ],
    ];

    public function setGroupingStringEnum(string $groupingStringEnum)
    {
        $this->groupingStringEnum = $groupingStringEnum;
    }

    public function setSorted(bool $sorted)
    {
        $this->sorted = $sorted;
    }

    public function setStandardValue(array $standardValue)
    {
        $this->standardValue = $standardValue;
    }
}
