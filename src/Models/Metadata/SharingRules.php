<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingRules
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SharingCriteriaRule[]|null $sharingCriteriaRules
 * @property SharingGuestRule[]|null $sharingGuestRules
 * @property SharingOwnerRule[]|null $sharingOwnerRules
 * @property SharingTerritoryRule[]|null $sharingTerritoryRules
 */
class SharingRules extends Metadata
{
    public static $classMap = [
        'sharingCriteriaRules' => [
            'multiple' => true,
            'type' => SharingCriteriaRule::class,
        ],
        'sharingGuestRules' => [
            'multiple' => true,
            'type' => SharingGuestRule::class,
        ],
        'sharingOwnerRules' => [
            'multiple' => true,
            'type' => SharingOwnerRule::class,
        ],
        'sharingTerritoryRules' => [
            'multiple' => true,
            'type' => SharingTerritoryRule::class,
        ],
    ];

    public function setSharingCriteriaRules(array $sharingCriteriaRules)
    {
        $this->sharingCriteriaRules = $sharingCriteriaRules;
    }

    public function setSharingGuestRules(array $sharingGuestRules)
    {
        $this->sharingGuestRules = $sharingGuestRules;
    }

    public function setSharingOwnerRules(array $sharingOwnerRules)
    {
        $this->sharingOwnerRules = $sharingOwnerRules;
    }

    public function setSharingTerritoryRules(array $sharingTerritoryRules)
    {
        $this->sharingTerritoryRules = $sharingTerritoryRules;
    }
}
