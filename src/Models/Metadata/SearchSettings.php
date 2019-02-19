<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SearchSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $documentContentSearchEnabled
 * @property bool|null $optimizeSearchForCJKEnabled
 * @property bool|null $recentlyViewedUsersForBlankLookupEnabled
 * @property SearchSettingsByObject|null $searchSettingsByObject
 * @property bool|null $sidebarAutoCompleteEnabled
 * @property bool|null $sidebarDropDownListEnabled
 * @property bool|null $sidebarLimitToItemsIOwnCheckboxEnabled
 * @property bool|null $singleSearchResultShortcutEnabled
 * @property bool|null $spellCorrectKnowledgeSearchEnabled
 */
class SearchSettings extends Metadata
{
    public static $classMap = [
        'searchSettingsByObject' => [
            'multiple' => false,
            'type' => SearchSettingsByObject::class,
        ],
    ];

    public function setDocumentContentSearchEnabled(bool $documentContentSearchEnabled)
    {
        $this->documentContentSearchEnabled = $documentContentSearchEnabled;
    }

    public function setOptimizeSearchForCJKEnabled(bool $optimizeSearchForCJKEnabled)
    {
        $this->optimizeSearchForCJKEnabled = $optimizeSearchForCJKEnabled;
    }

    public function setRecentlyViewedUsersForBlankLookupEnabled(bool $recentlyViewedUsersForBlankLookupEnabled)
    {
        $this->recentlyViewedUsersForBlankLookupEnabled = $recentlyViewedUsersForBlankLookupEnabled;
    }

    public function setSearchSettingsByObject(SearchSettingsByObject $searchSettingsByObject)
    {
        $this->searchSettingsByObject = $searchSettingsByObject;
    }

    public function setSidebarAutoCompleteEnabled(bool $sidebarAutoCompleteEnabled)
    {
        $this->sidebarAutoCompleteEnabled = $sidebarAutoCompleteEnabled;
    }

    public function setSidebarDropDownListEnabled(bool $sidebarDropDownListEnabled)
    {
        $this->sidebarDropDownListEnabled = $sidebarDropDownListEnabled;
    }

    public function setSidebarLimitToItemsIOwnCheckboxEnabled(bool $sidebarLimitToItemsIOwnCheckboxEnabled)
    {
        $this->sidebarLimitToItemsIOwnCheckboxEnabled = $sidebarLimitToItemsIOwnCheckboxEnabled;
    }

    public function setSingleSearchResultShortcutEnabled(bool $singleSearchResultShortcutEnabled)
    {
        $this->singleSearchResultShortcutEnabled = $singleSearchResultShortcutEnabled;
    }

    public function setSpellCorrectKnowledgeSearchEnabled(bool $spellCorrectKnowledgeSearchEnabled)
    {
        $this->spellCorrectKnowledgeSearchEnabled = $spellCorrectKnowledgeSearchEnabled;
    }
}
