<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationAudience
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RecommendationAudienceDetail[]|null $recommendationAudienceDetails
 */
class RecommendationAudience
{
    public static $classMap = [
        'recommendationAudienceDetails' => [
            'multiple' => true,
            'type' => RecommendationAudienceDetail::class,
        ],
    ];

    public function setRecommendationAudienceDetails(array $recommendationAudienceDetails)
    {
        $this->recommendationAudienceDetails = $recommendationAudienceDetails;
    }
}
