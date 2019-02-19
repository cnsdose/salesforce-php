<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DataCategoryGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property DataCategory|null $dataCategory
 * @property string|null $description
 * @property string|null $label
 * @property ObjectUsage|null $objectUsage
 */
class DataCategoryGroup extends Metadata
{
    public static $classMap = [
        'dataCategory' => [
            'multiple' => false,
            'type' => DataCategory::class,
        ],
        'objectUsage' => [
            'multiple' => false,
            'type' => ObjectUsage::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setDataCategory(DataCategory $dataCategory)
    {
        $this->dataCategory = $dataCategory;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setObjectUsage(ObjectUsage $objectUsage)
    {
        $this->objectUsage = $objectUsage;
    }
}
