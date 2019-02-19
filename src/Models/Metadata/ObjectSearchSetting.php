<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectSearchSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enhancedLookupEnabled
 * @property bool|null $lookupAutoCompleteEnabled
 * @property string|null $name
 * @property int|null $resultsPerPageCount
 */
class ObjectSearchSetting
{
    public static $classMap = [
    ];

    public function setEnhancedLookupEnabled(bool $enhancedLookupEnabled)
    {
        $this->enhancedLookupEnabled = $enhancedLookupEnabled;
    }

    public function setLookupAutoCompleteEnabled(bool $lookupAutoCompleteEnabled)
    {
        $this->lookupAutoCompleteEnabled = $lookupAutoCompleteEnabled;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setResultsPerPageCount(int $resultsPerPageCount)
    {
        $this->resultsPerPageCount = $resultsPerPageCount;
    }
}
