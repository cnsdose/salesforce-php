<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReputationLevels
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ChatterAnswersReputationLevel[]|null $chatterAnswersReputationLevels
 * @property IdeaReputationLevel[]|null $ideaReputationLevels
 */
class ReputationLevels
{
    public static $classMap = [
        'chatterAnswersReputationLevels' => [
            'multiple' => true,
            'type' => ChatterAnswersReputationLevel::class,
        ],
        'ideaReputationLevels' => [
            'multiple' => true,
            'type' => IdeaReputationLevel::class,
        ],
    ];

    public function setChatterAnswersReputationLevels(array $chatterAnswersReputationLevels)
    {
        $this->chatterAnswersReputationLevels = $chatterAnswersReputationLevels;
    }

    public function setIdeaReputationLevels(array $ideaReputationLevels)
    {
        $this->ideaReputationLevels = $ideaReputationLevels;
    }
}
