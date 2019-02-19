<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ScheduledRecommendation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ScheduledRecommendationDetail[]|null $scheduledRecommendationDetails
 */
class ScheduledRecommendation
{
    public static $classMap = [
        'scheduledRecommendationDetails' => [
            'multiple' => true,
            'type' => ScheduledRecommendationDetail::class,
        ],
    ];

    public function setScheduledRecommendationDetails(array $scheduledRecommendationDetails)
    {
        $this->scheduledRecommendationDetails = $scheduledRecommendationDetails;
    }
}
