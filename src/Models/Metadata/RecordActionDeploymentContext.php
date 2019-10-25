<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionDeploymentContext
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $entityName
 * @property string|null $recommendationStrategy
 */
class RecordActionDeploymentContext
{
    public static $classMap = [
    ];

    public function setEntityName(string $entityName)
    {
        $this->entityName = $entityName;
    }

    public function setRecommendationStrategy(string $recommendationStrategy)
    {
        $this->recommendationStrategy = $recommendationStrategy;
    }
}
