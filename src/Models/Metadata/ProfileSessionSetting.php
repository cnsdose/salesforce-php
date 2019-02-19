<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileSessionSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $externalCommunityUserIdentityVerif
 * @property bool|null $forceLogout
 * @property string|null $profile
 * @property string|null $requiredSessionLevel
 * @property bool|null $sessionPersistence
 * @property int|null $sessionTimeout
 * @property bool|null $sessionTimeoutWarning
 */
class ProfileSessionSetting extends Metadata
{
    public static $classMap = [
    ];

    public function setExternalCommunityUserIdentityVerif(bool $externalCommunityUserIdentityVerif)
    {
        $this->externalCommunityUserIdentityVerif = $externalCommunityUserIdentityVerif;
    }

    public function setForceLogout(bool $forceLogout)
    {
        $this->forceLogout = $forceLogout;
    }

    public function setProfile(string $profile)
    {
        $this->profile = $profile;
    }

    public function setRequiredSessionLevel(SessionSecurityLevel $requiredSessionLevel)
    {
        $this->requiredSessionLevel = $requiredSessionLevel->getValue();
    }

    public function setSessionPersistence(bool $sessionPersistence)
    {
        $this->sessionPersistence = $sessionPersistence;
    }

    public function setSessionTimeout(int $sessionTimeout)
    {
        $this->sessionTimeout = $sessionTimeout;
    }

    public function setSessionTimeoutWarning(bool $sessionTimeoutWarning)
    {
        $this->sessionTimeoutWarning = $sessionTimeoutWarning;
    }
}
