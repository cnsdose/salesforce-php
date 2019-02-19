<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FeedFilterCriterion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $feedItemType
 * @property string|null $feedItemVisibility
 * @property string|null $relatedSObjectType
 */
class FeedFilterCriterion
{
    public static $classMap = [
    ];

    public function setFeedItemType(FeedItemType $feedItemType)
    {
        $this->feedItemType = $feedItemType->getValue();
    }

    public function setFeedItemVisibility(FeedItemVisibility $feedItemVisibility)
    {
        $this->feedItemVisibility = $feedItemVisibility->getValue();
    }

    public function setRelatedSObjectType(string $relatedSObjectType)
    {
        $this->relatedSObjectType = $relatedSObjectType;
    }
}
