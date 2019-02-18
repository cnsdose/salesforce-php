<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LookupFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $booleanFilter
 * @property string|null $description
 * @property string|null $errorMessage
 * @property FilterItem[]|null $filterItems
 * @property string|null $infoMessage
 * @property bool|null $isOptional
 */
class LookupFilter
{
    public static $classMap = [
        'filterItems' => [
            'multiple' => true,
            'type' => FilterItem::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setBooleanFilter(string $booleanFilter)
    {
        $this->booleanFilter = $booleanFilter;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setFilterItems(array $filterItems)
    {
        $this->filterItems = $filterItems;
    }

    public function setInfoMessage(string $infoMessage)
    {
        $this->infoMessage = $infoMessage;
    }

    public function setIsOptional(bool $isOptional)
    {
        $this->isOptional = $isOptional;
    }
}
