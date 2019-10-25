<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LightningExperienceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAccessCheckCrucPref
 * @property bool|null $enableApiUserLtngOutAccessPref
 * @property bool|null $enableAuraCDNPref
 * @property bool|null $enableFeedbackInMobile
 * @property bool|null $enableIE11DeprecationMsgHidden
 * @property bool|null $enableIE11LEXCrucPref
 * @property bool|null $enableInAppTooltips
 * @property bool|null $enableLEXOnIpadEnabled
 * @property bool|null $enableLexEndUsersNoSwitching
 * @property bool|null $enableNavPersonalizationOptOut
 * @property bool|null $enableRemoveThemeBrandBanner
 * @property bool|null $enableS1BannerPref
 * @property bool|null $enableS1BrowserEnabled
 * @property bool|null $enableS1DesktopEnabled
 * @property bool|null $enableS1UiLoggingEnabled
 * @property bool|null $enableTryLightningOptOut
 * @property bool|null $enableUseS1AlohaDesktop
 * @property bool|null $enableUsersAreLightningOnly
 */
class LightningExperienceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAccessCheckCrucPref(bool $enableAccessCheckCrucPref)
    {
        $this->enableAccessCheckCrucPref = $enableAccessCheckCrucPref;
    }

    public function setEnableApiUserLtngOutAccessPref(bool $enableApiUserLtngOutAccessPref)
    {
        $this->enableApiUserLtngOutAccessPref = $enableApiUserLtngOutAccessPref;
    }

    public function setEnableAuraCDNPref(bool $enableAuraCDNPref)
    {
        $this->enableAuraCDNPref = $enableAuraCDNPref;
    }

    public function setEnableFeedbackInMobile(bool $enableFeedbackInMobile)
    {
        $this->enableFeedbackInMobile = $enableFeedbackInMobile;
    }

    public function setEnableIE11DeprecationMsgHidden(bool $enableIE11DeprecationMsgHidden)
    {
        $this->enableIE11DeprecationMsgHidden = $enableIE11DeprecationMsgHidden;
    }

    public function setEnableIE11LEXCrucPref(bool $enableIE11LEXCrucPref)
    {
        $this->enableIE11LEXCrucPref = $enableIE11LEXCrucPref;
    }

    public function setEnableInAppTooltips(bool $enableInAppTooltips)
    {
        $this->enableInAppTooltips = $enableInAppTooltips;
    }

    public function setEnableLEXOnIpadEnabled(bool $enableLEXOnIpadEnabled)
    {
        $this->enableLEXOnIpadEnabled = $enableLEXOnIpadEnabled;
    }

    public function setEnableLexEndUsersNoSwitching(bool $enableLexEndUsersNoSwitching)
    {
        $this->enableLexEndUsersNoSwitching = $enableLexEndUsersNoSwitching;
    }

    public function setEnableNavPersonalizationOptOut(bool $enableNavPersonalizationOptOut)
    {
        $this->enableNavPersonalizationOptOut = $enableNavPersonalizationOptOut;
    }

    public function setEnableRemoveThemeBrandBanner(bool $enableRemoveThemeBrandBanner)
    {
        $this->enableRemoveThemeBrandBanner = $enableRemoveThemeBrandBanner;
    }

    public function setEnableS1BannerPref(bool $enableS1BannerPref)
    {
        $this->enableS1BannerPref = $enableS1BannerPref;
    }

    public function setEnableS1BrowserEnabled(bool $enableS1BrowserEnabled)
    {
        $this->enableS1BrowserEnabled = $enableS1BrowserEnabled;
    }

    public function setEnableS1DesktopEnabled(bool $enableS1DesktopEnabled)
    {
        $this->enableS1DesktopEnabled = $enableS1DesktopEnabled;
    }

    public function setEnableS1UiLoggingEnabled(bool $enableS1UiLoggingEnabled)
    {
        $this->enableS1UiLoggingEnabled = $enableS1UiLoggingEnabled;
    }

    public function setEnableTryLightningOptOut(bool $enableTryLightningOptOut)
    {
        $this->enableTryLightningOptOut = $enableTryLightningOptOut;
    }

    public function setEnableUseS1AlohaDesktop(bool $enableUseS1AlohaDesktop)
    {
        $this->enableUseS1AlohaDesktop = $enableUseS1AlohaDesktop;
    }

    public function setEnableUsersAreLightningOnly(bool $enableUsersAreLightningOnly)
    {
        $this->enableUsersAreLightningOnly = $enableUsersAreLightningOnly;
    }
}
