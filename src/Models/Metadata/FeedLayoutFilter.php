<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FeedLayoutFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $feedFilterName
 * @property string|null $feedFilterType
 * @property string|null $feedItemType
 */
class FeedLayoutFilter
{
    public static $classMap = [
    ];

    public function setFeedFilterName(string $feedFilterName)
    {
        $this->feedFilterName = $feedFilterName;
    }

    public function setFeedFilterType(FeedLayoutFilterType $feedFilterType)
    {
        $this->feedFilterType = $feedFilterType->getValue();
    }

    public function setFeedItemType(FeedItemType $feedItemType)
    {
        $this->feedItemType = $feedItemType->getValue();
    }
}
