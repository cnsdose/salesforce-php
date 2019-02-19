<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationAudienceDetail
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $audienceCriteriaType
 * @property string|null $audienceCriteriaValue
 * @property string|null $setupName
 */
class RecommendationAudienceDetail
{
    public static $classMap = [
    ];

    public function setAudienceCriteriaType(AudienceCriteriaType $audienceCriteriaType)
    {
        $this->audienceCriteriaType = $audienceCriteriaType->getValue();
    }

    public function setAudienceCriteriaValue(string $audienceCriteriaValue)
    {
        $this->audienceCriteriaValue = $audienceCriteriaValue;
    }

    public function setSetupName(string $setupName)
    {
        $this->setupName = $setupName;
    }
}
