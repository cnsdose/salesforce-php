<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CaseClassificationSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $caseClassificationRecommendations
 * @property bool|null $reRunAttributeBasedRules
 * @property bool|null $runAssignmentRules
 */
class CaseClassificationSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCaseClassificationRecommendations(bool $caseClassificationRecommendations)
    {
        $this->caseClassificationRecommendations = $caseClassificationRecommendations;
    }

    public function setReRunAttributeBasedRules(bool $reRunAttributeBasedRules)
    {
        $this->reRunAttributeBasedRules = $reRunAttributeBasedRules;
    }

    public function setRunAssignmentRules(bool $runAssignmentRules)
    {
        $this->runAssignmentRules = $runAssignmentRules;
    }
}
