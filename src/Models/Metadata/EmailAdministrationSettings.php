<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailAdministrationSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableComplianceBcc
 * @property bool|null $enableEmailConsentManagement
 * @property bool|null $enableEmailSenderIdCompliance
 * @property bool|null $enableEmailSpfCompliance
 * @property bool|null $enableEmailToSalesforce
 * @property bool|null $enableEmailWorkflowApproval
 * @property bool|null $enableEnhancedEmailEnabled
 * @property bool|null $enableHandleBouncedEmails
 * @property bool|null $enableHtmlEmail
 * @property bool|null $enableListEmailLogActivities
 * @property bool|null $enableResendBouncedEmails
 * @property bool|null $enableRestrictTlsToDomains
 * @property bool|null $enableSendThroughGmailPref
 * @property bool|null $enableSendViaExchangePref
 * @property bool|null $enableSendViaGmailPref
 * @property bool|null $enableSetMatchingEmailsOnBounce
 * @property bool|null $enableUseOrgFootersForExtTrans
 * @property bool|null $sendEmailsEvenWhenAutomationUpdatesSameRecord
 * @property bool|null $sendMassEmailNotification
 * @property bool|null $sendTextOnlySystemEmails
 */
class EmailAdministrationSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableComplianceBcc(bool $enableComplianceBcc)
    {
        $this->enableComplianceBcc = $enableComplianceBcc;
    }

    public function setEnableEmailConsentManagement(bool $enableEmailConsentManagement)
    {
        $this->enableEmailConsentManagement = $enableEmailConsentManagement;
    }

    public function setEnableEmailSenderIdCompliance(bool $enableEmailSenderIdCompliance)
    {
        $this->enableEmailSenderIdCompliance = $enableEmailSenderIdCompliance;
    }

    public function setEnableEmailSpfCompliance(bool $enableEmailSpfCompliance)
    {
        $this->enableEmailSpfCompliance = $enableEmailSpfCompliance;
    }

    public function setEnableEmailToSalesforce(bool $enableEmailToSalesforce)
    {
        $this->enableEmailToSalesforce = $enableEmailToSalesforce;
    }

    public function setEnableEmailWorkflowApproval(bool $enableEmailWorkflowApproval)
    {
        $this->enableEmailWorkflowApproval = $enableEmailWorkflowApproval;
    }

    public function setEnableEnhancedEmailEnabled(bool $enableEnhancedEmailEnabled)
    {
        $this->enableEnhancedEmailEnabled = $enableEnhancedEmailEnabled;
    }

    public function setEnableHandleBouncedEmails(bool $enableHandleBouncedEmails)
    {
        $this->enableHandleBouncedEmails = $enableHandleBouncedEmails;
    }

    public function setEnableHtmlEmail(bool $enableHtmlEmail)
    {
        $this->enableHtmlEmail = $enableHtmlEmail;
    }

    public function setEnableListEmailLogActivities(bool $enableListEmailLogActivities)
    {
        $this->enableListEmailLogActivities = $enableListEmailLogActivities;
    }

    public function setEnableResendBouncedEmails(bool $enableResendBouncedEmails)
    {
        $this->enableResendBouncedEmails = $enableResendBouncedEmails;
    }

    public function setEnableRestrictTlsToDomains(bool $enableRestrictTlsToDomains)
    {
        $this->enableRestrictTlsToDomains = $enableRestrictTlsToDomains;
    }

    public function setEnableSendThroughGmailPref(bool $enableSendThroughGmailPref)
    {
        $this->enableSendThroughGmailPref = $enableSendThroughGmailPref;
    }

    public function setEnableSendViaExchangePref(bool $enableSendViaExchangePref)
    {
        $this->enableSendViaExchangePref = $enableSendViaExchangePref;
    }

    public function setEnableSendViaGmailPref(bool $enableSendViaGmailPref)
    {
        $this->enableSendViaGmailPref = $enableSendViaGmailPref;
    }

    public function setEnableSetMatchingEmailsOnBounce(bool $enableSetMatchingEmailsOnBounce)
    {
        $this->enableSetMatchingEmailsOnBounce = $enableSetMatchingEmailsOnBounce;
    }

    public function setEnableUseOrgFootersForExtTrans(bool $enableUseOrgFootersForExtTrans)
    {
        $this->enableUseOrgFootersForExtTrans = $enableUseOrgFootersForExtTrans;
    }

    public function setSendEmailsEvenWhenAutomationUpdatesSameRecord(bool $sendEmailsEvenWhenAutomationUpdatesSameRecord)
    {
        $this->sendEmailsEvenWhenAutomationUpdatesSameRecord = $sendEmailsEvenWhenAutomationUpdatesSameRecord;
    }

    public function setSendMassEmailNotification(bool $sendMassEmailNotification)
    {
        $this->sendMassEmailNotification = $sendMassEmailNotification;
    }

    public function setSendTextOnlySystemEmails(bool $sendTextOnlySystemEmails)
    {
        $this->sendTextOnlySystemEmails = $sendTextOnlySystemEmails;
    }
}
