<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileCategoryGroupVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $dataCategories
 * @property string|null $dataCategoryGroup
 * @property string|null $visibility
 */
class ProfileCategoryGroupVisibility
{
    public static $classMap = [
    ];

    public function setDataCategories(array $dataCategories)
    {
        $this->dataCategories = $dataCategories;
    }

    public function setDataCategoryGroup(string $dataCategoryGroup)
    {
        $this->dataCategoryGroup = $dataCategoryGroup;
    }

    public function setVisibility(CategoryGroupVisibility $visibility)
    {
        $this->visibility = $visibility->getValue();
    }
}
