<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FeedLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $autocollapsePublisher
 * @property bool|null $compactFeed
 * @property string|null $feedFilterPosition
 * @property FeedLayoutFilter[]|null $feedFilters
 * @property bool|null $fullWidthFeed
 * @property bool|null $hideSidebar
 * @property bool|null $highlightExternalFeedItems
 * @property FeedLayoutComponent[]|null $leftComponents
 * @property FeedLayoutComponent[]|null $rightComponents
 * @property bool|null $useInlineFiltersInConsole
 */
class FeedLayout
{
    public static $classMap = [
        'feedFilters' => [
            'multiple' => true,
            'type' => FeedLayoutFilter::class,
        ],
        'leftComponents' => [
            'multiple' => true,
            'type' => FeedLayoutComponent::class,
        ],
        'rightComponents' => [
            'multiple' => true,
            'type' => FeedLayoutComponent::class,
        ],
    ];

    public function setAutocollapsePublisher(bool $autocollapsePublisher)
    {
        $this->autocollapsePublisher = $autocollapsePublisher;
    }

    public function setCompactFeed(bool $compactFeed)
    {
        $this->compactFeed = $compactFeed;
    }

    public function setFeedFilterPosition(FeedLayoutFilterPosition $feedFilterPosition)
    {
        $this->feedFilterPosition = $feedFilterPosition->getValue();
    }

    public function setFeedFilters(array $feedFilters)
    {
        $this->feedFilters = $feedFilters;
    }

    public function setFullWidthFeed(bool $fullWidthFeed)
    {
        $this->fullWidthFeed = $fullWidthFeed;
    }

    public function setHideSidebar(bool $hideSidebar)
    {
        $this->hideSidebar = $hideSidebar;
    }

    public function setHighlightExternalFeedItems(bool $highlightExternalFeedItems)
    {
        $this->highlightExternalFeedItems = $highlightExternalFeedItems;
    }

    public function setLeftComponents(array $leftComponents)
    {
        $this->leftComponents = $leftComponents;
    }

    public function setRightComponents(array $rightComponents)
    {
        $this->rightComponents = $rightComponents;
    }

    public function setUseInlineFiltersInConsole(bool $useInlineFiltersInConsole)
    {
        $this->useInlineFiltersInConsole = $useInlineFiltersInConsole;
    }
}
