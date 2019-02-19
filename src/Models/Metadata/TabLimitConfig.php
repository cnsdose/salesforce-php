<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TabLimitConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $maxNumberOfPrimaryTabs
 * @property string|null $maxNumberOfSubTabs
 */
class TabLimitConfig
{
    public static $classMap = [
    ];

    public function setMaxNumberOfPrimaryTabs(string $maxNumberOfPrimaryTabs)
    {
        $this->maxNumberOfPrimaryTabs = $maxNumberOfPrimaryTabs;
    }

    public function setMaxNumberOfSubTabs(string $maxNumberOfSubTabs)
    {
        $this->maxNumberOfSubTabs = $maxNumberOfSubTabs;
    }
}
