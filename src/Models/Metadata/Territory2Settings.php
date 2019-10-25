<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2Settings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $defaultAccountAccessLevel
 * @property string|null $defaultCaseAccessLevel
 * @property string|null $defaultContactAccessLevel
 * @property string|null $defaultOpportunityAccessLevel
 * @property bool|null $enableTerritoryManagement2
 * @property Territory2SettingsOpportunityFilter|null $opportunityFilterSettings
 */
class Territory2Settings extends Metadata
{
    public static $classMap = [
        'opportunityFilterSettings' => [
            'multiple' => false,
            'type' => Territory2SettingsOpportunityFilter::class,
        ],
    ];

    public function setDefaultAccountAccessLevel(string $defaultAccountAccessLevel)
    {
        $this->defaultAccountAccessLevel = $defaultAccountAccessLevel;
    }

    public function setDefaultCaseAccessLevel(string $defaultCaseAccessLevel)
    {
        $this->defaultCaseAccessLevel = $defaultCaseAccessLevel;
    }

    public function setDefaultContactAccessLevel(string $defaultContactAccessLevel)
    {
        $this->defaultContactAccessLevel = $defaultContactAccessLevel;
    }

    public function setDefaultOpportunityAccessLevel(string $defaultOpportunityAccessLevel)
    {
        $this->defaultOpportunityAccessLevel = $defaultOpportunityAccessLevel;
    }

    public function setEnableTerritoryManagement2(bool $enableTerritoryManagement2)
    {
        $this->enableTerritoryManagement2 = $enableTerritoryManagement2;
    }

    public function setOpportunityFilterSettings(Territory2SettingsOpportunityFilter $opportunityFilterSettings)
    {
        $this->opportunityFilterSettings = $opportunityFilterSettings;
    }
}
