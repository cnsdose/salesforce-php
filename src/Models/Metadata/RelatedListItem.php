<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RelatedListItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $customButtons
 * @property string[]|null $excludeButtons
 * @property string[]|null $fields
 * @property string|null $relatedList
 * @property string|null $sortField
 * @property string|null $sortOrder
 */
class RelatedListItem
{
    public static $classMap = [
    ];

    public function setCustomButtons(array $customButtons)
    {
        $this->customButtons = $customButtons;
    }

    public function setExcludeButtons(array $excludeButtons)
    {
        $this->excludeButtons = $excludeButtons;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setRelatedList(string $relatedList)
    {
        $this->relatedList = $relatedList;
    }

    public function setSortField(string $sortField)
    {
        $this->sortField = $sortField;
    }

    public function setSortOrder(SortOrder $sortOrder)
    {
        $this->sortOrder = $sortOrder->getValue();
    }
}
