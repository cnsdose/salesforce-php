<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NetworkPageOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $changePasswordPageOverrideSetting
 * @property string|null $forgotPasswordPageOverrideSetting
 * @property string|null $homePageOverrideSetting
 * @property string|null $loginPageOverrideSetting
 * @property string|null $selfRegProfilePageOverrideSetting
 */
class NetworkPageOverride
{
    public static $classMap = [
    ];

    public function setChangePasswordPageOverrideSetting(NetworkPageOverrideSetting $changePasswordPageOverrideSetting)
    {
        $this->changePasswordPageOverrideSetting = $changePasswordPageOverrideSetting->getValue();
    }

    public function setForgotPasswordPageOverrideSetting(NetworkPageOverrideSetting $forgotPasswordPageOverrideSetting)
    {
        $this->forgotPasswordPageOverrideSetting = $forgotPasswordPageOverrideSetting->getValue();
    }

    public function setHomePageOverrideSetting(NetworkPageOverrideSetting $homePageOverrideSetting)
    {
        $this->homePageOverrideSetting = $homePageOverrideSetting->getValue();
    }

    public function setLoginPageOverrideSetting(NetworkPageOverrideSetting $loginPageOverrideSetting)
    {
        $this->loginPageOverrideSetting = $loginPageOverrideSetting->getValue();
    }

    public function setSelfRegProfilePageOverrideSetting(NetworkPageOverrideSetting $selfRegProfilePageOverrideSetting)
    {
        $this->selfRegProfilePageOverrideSetting = $selfRegProfilePageOverrideSetting->getValue();
    }
}
