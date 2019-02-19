<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeRecommendationLimit
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $filterMode
 * @property int|null $lookbackDuration
 * @property int|null $maxRecommendationCount
 */
class StrategyNodeRecommendationLimit extends StrategyNodeUnionBase
{
    public static $classMap = [
    ];

    public function setFilterMode(array $filterMode)
    {
        $this->filterMode = $filterMode;
    }

    public function setLookbackDuration(int $lookbackDuration)
    {
        $this->lookbackDuration = $lookbackDuration;
    }

    public function setMaxRecommendationCount(int $maxRecommendationCount)
    {
        $this->maxRecommendationCount = $maxRecommendationCount;
    }
}
