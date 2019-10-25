<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UserManagementSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCanAnswerContainUsername
 * @property bool|null $enableCanSaveUserPerm
 * @property bool|null $enableConcealPersonalInfo
 * @property bool|null $enableContactlessExternalIdentityUsers
 * @property bool|null $enableEnhancedPermsetMgmt
 * @property bool|null $enableEnhancedProfileMgmt
 * @property bool|null $enableNewProfileUI
 * @property bool|null $enableScrambleUserData
 * @property bool|null $enableUserSelfDeactivate
 */
class UserManagementSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCanAnswerContainUsername(bool $enableCanAnswerContainUsername)
    {
        $this->enableCanAnswerContainUsername = $enableCanAnswerContainUsername;
    }

    public function setEnableCanSaveUserPerm(bool $enableCanSaveUserPerm)
    {
        $this->enableCanSaveUserPerm = $enableCanSaveUserPerm;
    }

    public function setEnableConcealPersonalInfo(bool $enableConcealPersonalInfo)
    {
        $this->enableConcealPersonalInfo = $enableConcealPersonalInfo;
    }

    public function setEnableContactlessExternalIdentityUsers(bool $enableContactlessExternalIdentityUsers)
    {
        $this->enableContactlessExternalIdentityUsers = $enableContactlessExternalIdentityUsers;
    }

    public function setEnableEnhancedPermsetMgmt(bool $enableEnhancedPermsetMgmt)
    {
        $this->enableEnhancedPermsetMgmt = $enableEnhancedPermsetMgmt;
    }

    public function setEnableEnhancedProfileMgmt(bool $enableEnhancedProfileMgmt)
    {
        $this->enableEnhancedProfileMgmt = $enableEnhancedProfileMgmt;
    }

    public function setEnableNewProfileUI(bool $enableNewProfileUI)
    {
        $this->enableNewProfileUI = $enableNewProfileUI;
    }

    public function setEnableScrambleUserData(bool $enableScrambleUserData)
    {
        $this->enableScrambleUserData = $enableScrambleUserData;
    }

    public function setEnableUserSelfDeactivate(bool $enableUserSelfDeactivate)
    {
        $this->enableUserSelfDeactivate = $enableUserSelfDeactivate;
    }
}
