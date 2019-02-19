<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FeedItemSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $characterLimit
 * @property bool|null $collapseThread
 * @property string|null $displayFormat
 * @property string|null $feedItemType
 */
class FeedItemSettings
{
    public static $classMap = [
    ];

    public function setCharacterLimit(int $characterLimit)
    {
        $this->characterLimit = $characterLimit;
    }

    public function setCollapseThread(bool $collapseThread)
    {
        $this->collapseThread = $collapseThread;
    }

    public function setDisplayFormat(FeedItemDisplayFormat $displayFormat)
    {
        $this->displayFormat = $displayFormat->getValue();
    }

    public function setFeedItemType(FeedItemType $feedItemType)
    {
        $this->feedItemType = $feedItemType->getValue();
    }
}
