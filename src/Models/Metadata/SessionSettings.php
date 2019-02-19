<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SessionSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $disableTimeoutWarning
 * @property bool|null $enableCSPOnEmail
 * @property bool|null $enableCSRFOnGet
 * @property bool|null $enableCSRFOnPost
 * @property bool|null $enableCacheAndAutocomplete
 * @property bool|null $enableClickjackNonsetupSFDC
 * @property bool|null $enableClickjackNonsetupUser
 * @property bool|null $enableClickjackNonsetupUserHeaderless
 * @property bool|null $enableClickjackSetup
 * @property bool|null $enableContentSniffingProtection
 * @property bool|null $enablePostForSessions
 * @property bool|null $enableSMSIdentity
 * @property bool|null $enableUpgradeInsecureRequests
 * @property bool|null $enableXssProtection
 * @property bool|null $enforceIpRangesEveryRequest
 * @property bool|null $forceLogoutOnSessionTimeout
 * @property bool|null $forceRelogin
 * @property bool|null $hstsOnForcecomSites
 * @property bool|null $identityConfirmationOnEmailChange
 * @property bool|null $identityConfirmationOnTwoFactorRegistrationEnabled
 * @property bool|null $lockSessionsToDomain
 * @property bool|null $lockSessionsToIp
 * @property bool|null $lockerServiceCSP
 * @property bool|null $lockerServiceFrozenRealm
 * @property string|null $logoutURL
 * @property bool|null $redirectionWarning
 * @property bool|null $referrerPolicy
 * @property bool|null $requireHttpOnly
 * @property bool|null $requireHttps
 * @property bool|null $securityCentralKillSession
 * @property string|null $sessionTimeout
 */
class SessionSettings
{
    public static $classMap = [
    ];

    public function setDisableTimeoutWarning(bool $disableTimeoutWarning)
    {
        $this->disableTimeoutWarning = $disableTimeoutWarning;
    }

    public function setEnableCSPOnEmail(bool $enableCSPOnEmail)
    {
        $this->enableCSPOnEmail = $enableCSPOnEmail;
    }

    public function setEnableCSRFOnGet(bool $enableCSRFOnGet)
    {
        $this->enableCSRFOnGet = $enableCSRFOnGet;
    }

    public function setEnableCSRFOnPost(bool $enableCSRFOnPost)
    {
        $this->enableCSRFOnPost = $enableCSRFOnPost;
    }

    public function setEnableCacheAndAutocomplete(bool $enableCacheAndAutocomplete)
    {
        $this->enableCacheAndAutocomplete = $enableCacheAndAutocomplete;
    }

    public function setEnableClickjackNonsetupSFDC(bool $enableClickjackNonsetupSFDC)
    {
        $this->enableClickjackNonsetupSFDC = $enableClickjackNonsetupSFDC;
    }

    public function setEnableClickjackNonsetupUser(bool $enableClickjackNonsetupUser)
    {
        $this->enableClickjackNonsetupUser = $enableClickjackNonsetupUser;
    }

    public function setEnableClickjackNonsetupUserHeaderless(bool $enableClickjackNonsetupUserHeaderless)
    {
        $this->enableClickjackNonsetupUserHeaderless = $enableClickjackNonsetupUserHeaderless;
    }

    public function setEnableClickjackSetup(bool $enableClickjackSetup)
    {
        $this->enableClickjackSetup = $enableClickjackSetup;
    }

    public function setEnableContentSniffingProtection(bool $enableContentSniffingProtection)
    {
        $this->enableContentSniffingProtection = $enableContentSniffingProtection;
    }

    public function setEnablePostForSessions(bool $enablePostForSessions)
    {
        $this->enablePostForSessions = $enablePostForSessions;
    }

    public function setEnableSMSIdentity(bool $enableSMSIdentity)
    {
        $this->enableSMSIdentity = $enableSMSIdentity;
    }

    public function setEnableUpgradeInsecureRequests(bool $enableUpgradeInsecureRequests)
    {
        $this->enableUpgradeInsecureRequests = $enableUpgradeInsecureRequests;
    }

    public function setEnableXssProtection(bool $enableXssProtection)
    {
        $this->enableXssProtection = $enableXssProtection;
    }

    public function setEnforceIpRangesEveryRequest(bool $enforceIpRangesEveryRequest)
    {
        $this->enforceIpRangesEveryRequest = $enforceIpRangesEveryRequest;
    }

    public function setForceLogoutOnSessionTimeout(bool $forceLogoutOnSessionTimeout)
    {
        $this->forceLogoutOnSessionTimeout = $forceLogoutOnSessionTimeout;
    }

    public function setForceRelogin(bool $forceRelogin)
    {
        $this->forceRelogin = $forceRelogin;
    }

    public function setHstsOnForcecomSites(bool $hstsOnForcecomSites)
    {
        $this->hstsOnForcecomSites = $hstsOnForcecomSites;
    }

    public function setIdentityConfirmationOnEmailChange(bool $identityConfirmationOnEmailChange)
    {
        $this->identityConfirmationOnEmailChange = $identityConfirmationOnEmailChange;
    }

    public function setIdentityConfirmationOnTwoFactorRegistrationEnabled(bool $identityConfirmationOnTwoFactorRegistrationEnabled)
    {
        $this->identityConfirmationOnTwoFactorRegistrationEnabled = $identityConfirmationOnTwoFactorRegistrationEnabled;
    }

    public function setLockSessionsToDomain(bool $lockSessionsToDomain)
    {
        $this->lockSessionsToDomain = $lockSessionsToDomain;
    }

    public function setLockSessionsToIp(bool $lockSessionsToIp)
    {
        $this->lockSessionsToIp = $lockSessionsToIp;
    }

    public function setLockerServiceCSP(bool $lockerServiceCSP)
    {
        $this->lockerServiceCSP = $lockerServiceCSP;
    }

    public function setLockerServiceFrozenRealm(bool $lockerServiceFrozenRealm)
    {
        $this->lockerServiceFrozenRealm = $lockerServiceFrozenRealm;
    }

    public function setLogoutURL(string $logoutURL)
    {
        $this->logoutURL = $logoutURL;
    }

    public function setRedirectionWarning(bool $redirectionWarning)
    {
        $this->redirectionWarning = $redirectionWarning;
    }

    public function setReferrerPolicy(bool $referrerPolicy)
    {
        $this->referrerPolicy = $referrerPolicy;
    }

    public function setRequireHttpOnly(bool $requireHttpOnly)
    {
        $this->requireHttpOnly = $requireHttpOnly;
    }

    public function setRequireHttps(bool $requireHttps)
    {
        $this->requireHttps = $requireHttps;
    }

    public function setSecurityCentralKillSession(bool $securityCentralKillSession)
    {
        $this->securityCentralKillSession = $securityCentralKillSession;
    }

    public function setSessionTimeout(SessionTimeout $sessionTimeout)
    {
        $this->sessionTimeout = $sessionTimeout->getValue();
    }
}
