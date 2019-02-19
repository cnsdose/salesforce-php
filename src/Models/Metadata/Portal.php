<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Portal
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $admin
 * @property string|null $defaultLanguage
 * @property string|null $description
 * @property string|null $emailSenderAddress
 * @property string|null $emailSenderName
 * @property bool|null $enableSelfCloseCase
 * @property string|null $footerDocument
 * @property string|null $forgotPassTemplate
 * @property string|null $headerDocument
 * @property bool|null $isSelfRegistrationActivated
 * @property string|null $loginHeaderDocument
 * @property string|null $logoDocument
 * @property string|null $logoutUrl
 * @property string|null $newCommentTemplate
 * @property string|null $newPassTemplate
 * @property string|null $newUserTemplate
 * @property string|null $ownerNotifyTemplate
 * @property string|null $selfRegNewUserUrl
 * @property string|null $selfRegUserDefaultProfile
 * @property string|null $selfRegUserDefaultRole
 * @property string|null $selfRegUserTemplate
 * @property bool|null $showActionConfirmation
 * @property string|null $stylesheetDocument
 * @property string|null $type
 */
class Portal extends Metadata
{
    public static $classMap = [
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setAdmin(string $admin)
    {
        $this->admin = $admin;
    }

    public function setDefaultLanguage(string $defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEmailSenderAddress(string $emailSenderAddress)
    {
        $this->emailSenderAddress = $emailSenderAddress;
    }

    public function setEmailSenderName(string $emailSenderName)
    {
        $this->emailSenderName = $emailSenderName;
    }

    public function setEnableSelfCloseCase(bool $enableSelfCloseCase)
    {
        $this->enableSelfCloseCase = $enableSelfCloseCase;
    }

    public function setFooterDocument(string $footerDocument)
    {
        $this->footerDocument = $footerDocument;
    }

    public function setForgotPassTemplate(string $forgotPassTemplate)
    {
        $this->forgotPassTemplate = $forgotPassTemplate;
    }

    public function setHeaderDocument(string $headerDocument)
    {
        $this->headerDocument = $headerDocument;
    }

    public function setIsSelfRegistrationActivated(bool $isSelfRegistrationActivated)
    {
        $this->isSelfRegistrationActivated = $isSelfRegistrationActivated;
    }

    public function setLoginHeaderDocument(string $loginHeaderDocument)
    {
        $this->loginHeaderDocument = $loginHeaderDocument;
    }

    public function setLogoDocument(string $logoDocument)
    {
        $this->logoDocument = $logoDocument;
    }

    public function setLogoutUrl(string $logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
    }

    public function setNewCommentTemplate(string $newCommentTemplate)
    {
        $this->newCommentTemplate = $newCommentTemplate;
    }

    public function setNewPassTemplate(string $newPassTemplate)
    {
        $this->newPassTemplate = $newPassTemplate;
    }

    public function setNewUserTemplate(string $newUserTemplate)
    {
        $this->newUserTemplate = $newUserTemplate;
    }

    public function setOwnerNotifyTemplate(string $ownerNotifyTemplate)
    {
        $this->ownerNotifyTemplate = $ownerNotifyTemplate;
    }

    public function setSelfRegNewUserUrl(string $selfRegNewUserUrl)
    {
        $this->selfRegNewUserUrl = $selfRegNewUserUrl;
    }

    public function setSelfRegUserDefaultProfile(string $selfRegUserDefaultProfile)
    {
        $this->selfRegUserDefaultProfile = $selfRegUserDefaultProfile;
    }

    public function setSelfRegUserDefaultRole(PortalRoles $selfRegUserDefaultRole)
    {
        $this->selfRegUserDefaultRole = $selfRegUserDefaultRole->getValue();
    }

    public function setSelfRegUserTemplate(string $selfRegUserTemplate)
    {
        $this->selfRegUserTemplate = $selfRegUserTemplate;
    }

    public function setShowActionConfirmation(bool $showActionConfirmation)
    {
        $this->showActionConfirmation = $showActionConfirmation;
    }

    public function setStylesheetDocument(string $stylesheetDocument)
    {
        $this->stylesheetDocument = $stylesheetDocument;
    }

    public function setType(PortalType $type)
    {
        $this->type = $type->getValue();
    }
}
