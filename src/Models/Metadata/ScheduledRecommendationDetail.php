<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ScheduledRecommendationDetail
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $channel
 * @property bool|null $enabled
 * @property int|null $rank
 * @property string|null $recommendationAudience
 */
class ScheduledRecommendationDetail
{
    public static $classMap = [
    ];

    public function setChannel(RecommendationChannel $channel)
    {
        $this->channel = $channel->getValue();
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }

    public function setRecommendationAudience(string $recommendationAudience)
    {
        $this->recommendationAudience = $recommendationAudience;
    }
}
