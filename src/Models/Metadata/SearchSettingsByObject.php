<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SearchSettingsByObject
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ObjectSearchSetting[]|null $searchSettingsByObject
 */
class SearchSettingsByObject
{
    public static $classMap = [
        'searchSettingsByObject' => [
            'multiple' => true,
            'type' => ObjectSearchSetting::class,
        ],
    ];

    public function setSearchSettingsByObject(array $searchSettingsByObject)
    {
        $this->searchSettingsByObject = $searchSettingsByObject;
    }
}
