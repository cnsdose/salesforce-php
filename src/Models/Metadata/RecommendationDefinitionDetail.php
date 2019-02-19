<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationDefinitionDetail
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionUrl
 * @property string|null $description
 * @property string|null $linkText
 * @property ScheduledRecommendation|null $scheduledRecommendations
 * @property string|null $setupName
 * @property string|null $title
 */
class RecommendationDefinitionDetail
{
    public static $classMap = [
        'scheduledRecommendations' => [
            'multiple' => false,
            'type' => ScheduledRecommendation::class,
        ],
    ];

    public function setActionUrl(string $actionUrl)
    {
        $this->actionUrl = $actionUrl;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLinkText(string $linkText)
    {
        $this->linkText = $linkText;
    }

    public function setScheduledRecommendations(ScheduledRecommendation $scheduledRecommendations)
    {
        $this->scheduledRecommendations = $scheduledRecommendations;
    }

    public function setSetupName(string $setupName)
    {
        $this->setupName = $setupName;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
