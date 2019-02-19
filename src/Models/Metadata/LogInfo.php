<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LogInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $category
 * @property string|null $level
 */
class LogInfo
{
    public static $classMap = [
    ];

    public function setCategory(LogCategory $category)
    {
        $this->category = $category->getValue();
    }

    public function setLevel(LogCategoryLevel $level)
    {
        $this->level = $level->getValue();
    }
}
