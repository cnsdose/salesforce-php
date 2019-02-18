<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SearchLayouts
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $customTabListAdditionalFields
 * @property string[]|null $excludedStandardButtons
 * @property string[]|null $listViewButtons
 * @property string[]|null $lookupDialogsAdditionalFields
 * @property string[]|null $lookupFilterFields
 * @property string[]|null $lookupPhoneDialogsAdditionalFields
 * @property string[]|null $massQuickActions
 * @property string[]|null $searchFilterFields
 * @property string[]|null $searchResultsAdditionalFields
 * @property string[]|null $searchResultsCustomButtons
 */
class SearchLayouts
{
    public static $classMap = [
    ];

    public function setCustomTabListAdditionalFields(array $customTabListAdditionalFields)
    {
        $this->customTabListAdditionalFields = $customTabListAdditionalFields;
    }

    public function setExcludedStandardButtons(array $excludedStandardButtons)
    {
        $this->excludedStandardButtons = $excludedStandardButtons;
    }

    public function setListViewButtons(array $listViewButtons)
    {
        $this->listViewButtons = $listViewButtons;
    }

    public function setLookupDialogsAdditionalFields(array $lookupDialogsAdditionalFields)
    {
        $this->lookupDialogsAdditionalFields = $lookupDialogsAdditionalFields;
    }

    public function setLookupFilterFields(array $lookupFilterFields)
    {
        $this->lookupFilterFields = $lookupFilterFields;
    }

    public function setLookupPhoneDialogsAdditionalFields(array $lookupPhoneDialogsAdditionalFields)
    {
        $this->lookupPhoneDialogsAdditionalFields = $lookupPhoneDialogsAdditionalFields;
    }

    public function setMassQuickActions(array $massQuickActions)
    {
        $this->massQuickActions = $massQuickActions;
    }

    public function setSearchFilterFields(array $searchFilterFields)
    {
        $this->searchFilterFields = $searchFilterFields;
    }

    public function setSearchResultsAdditionalFields(array $searchResultsAdditionalFields)
    {
        $this->searchResultsAdditionalFields = $searchResultsAdditionalFields;
    }

    public function setSearchResultsCustomButtons(array $searchResultsCustomButtons)
    {
        $this->searchResultsCustomButtons = $searchResultsCustomButtons;
    }
}
