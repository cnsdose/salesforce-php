<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DebuggingHeader
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property LogInfo[]|null $categories
 * @property string|null $debugLevel
 */
class DebuggingHeader
{
    public static $classMap = [
        'categories' => [
            'multiple' => true,
            'type' => LogInfo::class,
        ],
    ];

    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }

    public function setDebugLevel(LogType $debugLevel)
    {
        $this->debugLevel = $debugLevel->getValue();
    }
}
