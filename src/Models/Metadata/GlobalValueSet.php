<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class GlobalValueSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CustomValue[]|null $customValue
 * @property string|null $description
 * @property string|null $masterLabel
 * @property bool|null $sorted
 */
class GlobalValueSet extends Metadata
{
    public static $classMap = [
        'customValue' => [
            'multiple' => true,
            'type' => CustomValue::class,
        ],
    ];

    public function setCustomValue(array $customValue)
    {
        $this->customValue = $customValue;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSorted(bool $sorted)
    {
        $this->sorted = $sorted;
    }
}
