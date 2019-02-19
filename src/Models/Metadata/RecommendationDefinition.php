<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationDefinition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RecommendationDefinitionDetail[]|null $recommendationDefinitionDetails
 */
class RecommendationDefinition
{
    public static $classMap = [
        'recommendationDefinitionDetails' => [
            'multiple' => true,
            'type' => RecommendationDefinitionDetail::class,
        ],
    ];

    public function setRecommendationDefinitionDetails(array $recommendationDefinitionDetails)
    {
        $this->recommendationDefinitionDetails = $recommendationDefinitionDetails;
    }
}
