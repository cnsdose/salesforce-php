<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SecuritySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property NetworkAccess|null $networkAccess
 * @property PasswordPolicies|null $passwordPolicies
 * @property SessionSettings|null $sessionSettings
 */
class SecuritySettings extends Metadata
{
    public static $classMap = [
        'networkAccess' => [
            'multiple' => false,
            'type' => NetworkAccess::class,
        ],
        'passwordPolicies' => [
            'multiple' => false,
            'type' => PasswordPolicies::class,
        ],
        'sessionSettings' => [
            'multiple' => false,
            'type' => SessionSettings::class,
        ],
    ];

    public function setNetworkAccess(NetworkAccess $networkAccess)
    {
        $this->networkAccess = $networkAccess;
    }

    public function setPasswordPolicies(PasswordPolicies $passwordPolicies)
    {
        $this->passwordPolicies = $passwordPolicies;
    }

    public function setSessionSettings(SessionSettings $sessionSettings)
    {
        $this->sessionSettings = $sessionSettings;
    }
}
