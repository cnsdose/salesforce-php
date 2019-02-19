<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MacroSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAdvancedSearch
 * @property bool|null $macrosInFolders
 */
class MacroSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAdvancedSearch(bool $enableAdvancedSearch)
    {
        $this->enableAdvancedSearch = $enableAdvancedSearch;
    }

    public function setMacrosInFolders(bool $macrosInFolders)
    {
        $this->macrosInFolders = $macrosInFolders;
    }
}
