<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccountSharingRuleSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseAccessLevel
 * @property string|null $contactAccessLevel
 * @property string|null $opportunityAccessLevel
 */
class AccountSharingRuleSettings
{
    public static $classMap = [
    ];

    public function setCaseAccessLevel(string $caseAccessLevel)
    {
        $this->caseAccessLevel = $caseAccessLevel;
    }

    public function setContactAccessLevel(string $contactAccessLevel)
    {
        $this->contactAccessLevel = $contactAccessLevel;
    }

    public function setOpportunityAccessLevel(string $opportunityAccessLevel)
    {
        $this->opportunityAccessLevel = $opportunityAccessLevel;
    }
}
