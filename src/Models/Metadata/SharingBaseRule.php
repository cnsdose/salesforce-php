<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingBaseRule
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessLevel
 * @property AccountSharingRuleSettings|null $accountSettings
 * @property string|null $description
 * @property string|null $label
 * @property SharedTo|null $sharedTo
 */
class SharingBaseRule extends Metadata
{
    public static $classMap = [
        'accountSettings' => [
            'multiple' => false,
            'type' => AccountSharingRuleSettings::class,
        ],
        'sharedTo' => [
            'multiple' => false,
            'type' => SharedTo::class,
        ],
    ];

    public function setAccessLevel(string $accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    public function setAccountSettings(AccountSharingRuleSettings $accountSettings)
    {
        $this->accountSettings = $accountSettings;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSharedTo(SharedTo $sharedTo)
    {
        $this->sharedTo = $sharedTo;
    }
}
