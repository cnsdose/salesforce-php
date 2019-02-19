<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class HomePageComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $body
 * @property int|null $height
 * @property string[]|null $links
 * @property string|null $page
 * @property string|null $pageComponentType
 * @property bool|null $showLabel
 * @property bool|null $showScrollbars
 * @property string|null $width
 */
class HomePageComponent extends Metadata
{
    public static $classMap = [
    ];

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setLinks(array $links)
    {
        $this->links = $links;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function setPageComponentType(PageComponentType $pageComponentType)
    {
        $this->pageComponentType = $pageComponentType->getValue();
    }

    public function setShowLabel(bool $showLabel)
    {
        $this->showLabel = $showLabel;
    }

    public function setShowScrollbars(bool $showScrollbars)
    {
        $this->showScrollbars = $showScrollbars;
    }

    public function setWidth(PageComponentWidth $width)
    {
        $this->width = $width->getValue();
    }
}
