<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrgPreferenceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property OrganizationSettingsDetail[]|null $preferences
 */
class OrgPreferenceSettings extends Metadata
{
    public static $classMap = [
        'preferences' => [
            'multiple' => true,
            'type' => OrganizationSettingsDetail::class,
        ],
    ];

    public function setPreferences(array $preferences)
    {
        $this->preferences = $preferences;
    }
}
