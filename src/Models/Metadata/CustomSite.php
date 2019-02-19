<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomSite
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property bool|null $allowHomePage
 * @property bool|null $allowStandardAnswersPages
 * @property bool|null $allowStandardIdeasPages
 * @property bool|null $allowStandardLookups
 * @property bool|null $allowStandardPortalPages
 * @property bool|null $allowStandardSearch
 * @property string|null $analyticsTrackingCode
 * @property string|null $authorizationRequiredPage
 * @property string|null $bandwidthExceededPage
 * @property bool|null $browserXssProtection
 * @property string|null $changePasswordPage
 * @property string|null $chatterAnswersForgotPasswordConfirmPage
 * @property string|null $chatterAnswersForgotPasswordPage
 * @property string|null $chatterAnswersHelpPage
 * @property string|null $chatterAnswersLoginPage
 * @property string|null $chatterAnswersRegistrationPage
 * @property string|null $clickjackProtectionLevel
 * @property bool|null $contentSniffingProtection
 * @property bool|null $cspUpgradeInsecureRequests
 * @property SiteWebAddress[]|null $customWebAddresses
 * @property string|null $description
 * @property string|null $favoriteIcon
 * @property string|null $fileNotFoundPage
 * @property string|null $forgotPasswordPage
 * @property string|null $genericErrorPage
 * @property string|null $guestProfile
 * @property string|null $inMaintenancePage
 * @property string|null $inactiveIndexPage
 * @property string|null $indexPage
 * @property string|null $masterLabel
 * @property string|null $myProfilePage
 * @property string|null $portal
 * @property bool|null $referrerPolicyOriginWhenCrossOrigin
 * @property bool|null $requireHttps
 * @property bool|null $requireInsecurePortalAccess
 * @property string|null $robotsTxtPage
 * @property string|null $rootComponent
 * @property string|null $selfRegPage
 * @property string|null $serverIsDown
 * @property string|null $siteAdmin
 * @property SiteRedirectMapping[]|null $siteRedirectMappings
 * @property string|null $siteTemplate
 * @property string|null $siteType
 * @property string|null $subdomain
 * @property string|null $urlPathPrefix
 */
class CustomSite extends Metadata
{
    public static $classMap = [
        'customWebAddresses' => [
            'multiple' => true,
            'type' => SiteWebAddress::class,
        ],
        'siteRedirectMappings' => [
            'multiple' => true,
            'type' => SiteRedirectMapping::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setAllowHomePage(bool $allowHomePage)
    {
        $this->allowHomePage = $allowHomePage;
    }

    public function setAllowStandardAnswersPages(bool $allowStandardAnswersPages)
    {
        $this->allowStandardAnswersPages = $allowStandardAnswersPages;
    }

    public function setAllowStandardIdeasPages(bool $allowStandardIdeasPages)
    {
        $this->allowStandardIdeasPages = $allowStandardIdeasPages;
    }

    public function setAllowStandardLookups(bool $allowStandardLookups)
    {
        $this->allowStandardLookups = $allowStandardLookups;
    }

    public function setAllowStandardPortalPages(bool $allowStandardPortalPages)
    {
        $this->allowStandardPortalPages = $allowStandardPortalPages;
    }

    public function setAllowStandardSearch(bool $allowStandardSearch)
    {
        $this->allowStandardSearch = $allowStandardSearch;
    }

    public function setAnalyticsTrackingCode(string $analyticsTrackingCode)
    {
        $this->analyticsTrackingCode = $analyticsTrackingCode;
    }

    public function setAuthorizationRequiredPage(string $authorizationRequiredPage)
    {
        $this->authorizationRequiredPage = $authorizationRequiredPage;
    }

    public function setBandwidthExceededPage(string $bandwidthExceededPage)
    {
        $this->bandwidthExceededPage = $bandwidthExceededPage;
    }

    public function setBrowserXssProtection(bool $browserXssProtection)
    {
        $this->browserXssProtection = $browserXssProtection;
    }

    public function setChangePasswordPage(string $changePasswordPage)
    {
        $this->changePasswordPage = $changePasswordPage;
    }

    public function setChatterAnswersForgotPasswordConfirmPage(string $chatterAnswersForgotPasswordConfirmPage)
    {
        $this->chatterAnswersForgotPasswordConfirmPage = $chatterAnswersForgotPasswordConfirmPage;
    }

    public function setChatterAnswersForgotPasswordPage(string $chatterAnswersForgotPasswordPage)
    {
        $this->chatterAnswersForgotPasswordPage = $chatterAnswersForgotPasswordPage;
    }

    public function setChatterAnswersHelpPage(string $chatterAnswersHelpPage)
    {
        $this->chatterAnswersHelpPage = $chatterAnswersHelpPage;
    }

    public function setChatterAnswersLoginPage(string $chatterAnswersLoginPage)
    {
        $this->chatterAnswersLoginPage = $chatterAnswersLoginPage;
    }

    public function setChatterAnswersRegistrationPage(string $chatterAnswersRegistrationPage)
    {
        $this->chatterAnswersRegistrationPage = $chatterAnswersRegistrationPage;
    }

    public function setClickjackProtectionLevel(SiteClickjackProtectionLevel $clickjackProtectionLevel)
    {
        $this->clickjackProtectionLevel = $clickjackProtectionLevel->getValue();
    }

    public function setContentSniffingProtection(bool $contentSniffingProtection)
    {
        $this->contentSniffingProtection = $contentSniffingProtection;
    }

    public function setCspUpgradeInsecureRequests(bool $cspUpgradeInsecureRequests)
    {
        $this->cspUpgradeInsecureRequests = $cspUpgradeInsecureRequests;
    }

    public function setCustomWebAddresses(array $customWebAddresses)
    {
        $this->customWebAddresses = $customWebAddresses;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFavoriteIcon(string $favoriteIcon)
    {
        $this->favoriteIcon = $favoriteIcon;
    }

    public function setFileNotFoundPage(string $fileNotFoundPage)
    {
        $this->fileNotFoundPage = $fileNotFoundPage;
    }

    public function setForgotPasswordPage(string $forgotPasswordPage)
    {
        $this->forgotPasswordPage = $forgotPasswordPage;
    }

    public function setGenericErrorPage(string $genericErrorPage)
    {
        $this->genericErrorPage = $genericErrorPage;
    }

    public function setGuestProfile(string $guestProfile)
    {
        $this->guestProfile = $guestProfile;
    }

    public function setInMaintenancePage(string $inMaintenancePage)
    {
        $this->inMaintenancePage = $inMaintenancePage;
    }

    public function setInactiveIndexPage(string $inactiveIndexPage)
    {
        $this->inactiveIndexPage = $inactiveIndexPage;
    }

    public function setIndexPage(string $indexPage)
    {
        $this->indexPage = $indexPage;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setMyProfilePage(string $myProfilePage)
    {
        $this->myProfilePage = $myProfilePage;
    }

    public function setPortal(string $portal)
    {
        $this->portal = $portal;
    }

    public function setReferrerPolicyOriginWhenCrossOrigin(bool $referrerPolicyOriginWhenCrossOrigin)
    {
        $this->referrerPolicyOriginWhenCrossOrigin = $referrerPolicyOriginWhenCrossOrigin;
    }

    public function setRequireHttps(bool $requireHttps)
    {
        $this->requireHttps = $requireHttps;
    }

    public function setRequireInsecurePortalAccess(bool $requireInsecurePortalAccess)
    {
        $this->requireInsecurePortalAccess = $requireInsecurePortalAccess;
    }

    public function setRobotsTxtPage(string $robotsTxtPage)
    {
        $this->robotsTxtPage = $robotsTxtPage;
    }

    public function setRootComponent(string $rootComponent)
    {
        $this->rootComponent = $rootComponent;
    }

    public function setSelfRegPage(string $selfRegPage)
    {
        $this->selfRegPage = $selfRegPage;
    }

    public function setServerIsDown(string $serverIsDown)
    {
        $this->serverIsDown = $serverIsDown;
    }

    public function setSiteAdmin(string $siteAdmin)
    {
        $this->siteAdmin = $siteAdmin;
    }

    public function setSiteRedirectMappings(array $siteRedirectMappings)
    {
        $this->siteRedirectMappings = $siteRedirectMappings;
    }

    public function setSiteTemplate(string $siteTemplate)
    {
        $this->siteTemplate = $siteTemplate;
    }

    public function setSiteType(SiteType $siteType)
    {
        $this->siteType = $siteType->getValue();
    }

    public function setSubdomain(string $subdomain)
    {
        $this->subdomain = $subdomain;
    }

    public function setUrlPathPrefix(string $urlPathPrefix)
    {
        $this->urlPathPrefix = $urlPathPrefix;
    }
}
