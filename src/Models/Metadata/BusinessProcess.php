<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BusinessProcess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $isActive
 * @property PicklistValue[]|null $values
 */
class BusinessProcess extends Metadata
{
    public static $classMap = [
        'values' => [
            'multiple' => true,
            'type' => PicklistValue::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}
