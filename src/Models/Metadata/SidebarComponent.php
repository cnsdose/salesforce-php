<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SidebarComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $componentType
 * @property string|null $createAction
 * @property bool|null $enableLinking
 * @property int|null $height
 * @property string|null $label
 * @property string|null $lookup
 * @property string|null $page
 * @property RelatedList[]|null $relatedLists
 * @property string|null $unit
 * @property string|null $updateAction
 * @property int|null $width
 */
class SidebarComponent
{
    public static $classMap = [
        'relatedLists' => [
            'multiple' => true,
            'type' => RelatedList::class,
        ],
    ];

    public function setComponentType(string $componentType)
    {
        $this->componentType = $componentType;
    }

    public function setCreateAction(string $createAction)
    {
        $this->createAction = $createAction;
    }

    public function setEnableLinking(bool $enableLinking)
    {
        $this->enableLinking = $enableLinking;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLookup(string $lookup)
    {
        $this->lookup = $lookup;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setRelatedLists(array $relatedLists)
    {
        $this->relatedLists = $relatedLists;
    }

    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }

    public function setUpdateAction(string $updateAction)
    {
        $this->updateAction = $updateAction;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }
}
