<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SecuritySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canUsersGrantLoginAccess
 * @property bool|null $enableAdminLoginAsAnyUser
 * @property bool|null $enableAuditFieldsInactiveOwner
 * @property bool|null $enableAuraSecureEvalPref
 * @property bool|null $enableRequireHttpsConnection
 * @property bool|null $isTLSv12Required
 * @property bool|null $isTLSv12RequiredCommunities
 * @property NetworkAccess|null $networkAccess
 * @property PasswordPolicies|null $passwordPolicies
 * @property SessionSettings|null $sessionSettings
 * @property SingleSignOnSettings|null $singleSignOnSettings
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
        'singleSignOnSettings' => [
            'multiple' => false,
            'type' => SingleSignOnSettings::class,
        ],
    ];

    public function setCanUsersGrantLoginAccess(bool $canUsersGrantLoginAccess)
    {
        $this->canUsersGrantLoginAccess = $canUsersGrantLoginAccess;
    }

    public function setEnableAdminLoginAsAnyUser(bool $enableAdminLoginAsAnyUser)
    {
        $this->enableAdminLoginAsAnyUser = $enableAdminLoginAsAnyUser;
    }

    public function setEnableAuditFieldsInactiveOwner(bool $enableAuditFieldsInactiveOwner)
    {
        $this->enableAuditFieldsInactiveOwner = $enableAuditFieldsInactiveOwner;
    }

    public function setEnableAuraSecureEvalPref(bool $enableAuraSecureEvalPref)
    {
        $this->enableAuraSecureEvalPref = $enableAuraSecureEvalPref;
    }

    public function setEnableRequireHttpsConnection(bool $enableRequireHttpsConnection)
    {
        $this->enableRequireHttpsConnection = $enableRequireHttpsConnection;
    }

    public function setIsTLSv12Required(bool $isTLSv12Required)
    {
        $this->isTLSv12Required = $isTLSv12Required;
    }

    public function setIsTLSv12RequiredCommunities(bool $isTLSv12RequiredCommunities)
    {
        $this->isTLSv12RequiredCommunities = $isTLSv12RequiredCommunities;
    }

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

    public function setSingleSignOnSettings(SingleSignOnSettings $singleSignOnSettings)
    {
        $this->singleSignOnSettings = $singleSignOnSettings;
    }
}
