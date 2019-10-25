<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CaseSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseAssignNotificationTemplate
 * @property bool|null $caseAutoProcUser
 * @property string|null $caseCloseNotificationTemplate
 * @property string|null $caseCommentNotificationTemplate
 * @property string|null $caseCreateNotificationTemplate
 * @property FeedItemSettings[]|null $caseFeedItemSettings
 * @property bool|null $caseFeedReadUnreadLtng
 * @property bool|null $caseMergeInLightning
 * @property bool|null $closeCaseThroughStatusChange
 * @property bool|null $defaultCaseFeedLayoutOn
 * @property string|null $defaultCaseOwner
 * @property string|null $defaultCaseOwnerType
 * @property string|null $defaultCaseUser
 * @property string|null $emailActionDefaultsHandlerClass
 * @property EmailToCaseSettings|null $emailToCase
 * @property bool|null $enableCaseFeed
 * @property bool|null $enableCollapseEmailThread
 * @property bool|null $enableDraftEmails
 * @property bool|null $enableEarlyEscalationRuleTriggers
 * @property bool|null $enableEmailActionDefaultsHandler
 * @property bool|null $enableSuggestedArticlesApplication
 * @property bool|null $enableSuggestedArticlesCustomerPortal
 * @property bool|null $enableSuggestedArticlesPartnerPortal
 * @property bool|null $enableSuggestedSolutions
 * @property bool|null $escalateCaseBefore
 * @property bool|null $genericMessageEnabled
 * @property bool|null $keepRecordTypeOnAssignmentRule
 * @property bool|null $notifyContactOnCaseComment
 * @property bool|null $notifyDefaultCaseOwner
 * @property bool|null $notifyOwnerOnCaseComment
 * @property bool|null $notifyOwnerOnCaseOwnerChange
 * @property bool|null $predictiveSupportEnabled
 * @property bool|null $showEmailAttachmentsInCaseAttachmentsRL
 * @property bool|null $showFewerCloseActions
 * @property string|null $systemUserEmail
 * @property bool|null $useSystemEmailAddress
 * @property bool|null $useSystemUserAsDefaultCaseUser
 * @property WebToCaseSettings|null $webToCase
 */
class CaseSettings extends Metadata
{
    public static $classMap = [
        'caseFeedItemSettings' => [
            'multiple' => true,
            'type' => FeedItemSettings::class,
        ],
        'emailToCase' => [
            'multiple' => false,
            'type' => EmailToCaseSettings::class,
        ],
        'webToCase' => [
            'multiple' => false,
            'type' => WebToCaseSettings::class,
        ],
    ];

    public function setCaseAssignNotificationTemplate(string $caseAssignNotificationTemplate)
    {
        $this->caseAssignNotificationTemplate = $caseAssignNotificationTemplate;
    }

    public function setCaseAutoProcUser(bool $caseAutoProcUser)
    {
        $this->caseAutoProcUser = $caseAutoProcUser;
    }

    public function setCaseCloseNotificationTemplate(string $caseCloseNotificationTemplate)
    {
        $this->caseCloseNotificationTemplate = $caseCloseNotificationTemplate;
    }

    public function setCaseCommentNotificationTemplate(string $caseCommentNotificationTemplate)
    {
        $this->caseCommentNotificationTemplate = $caseCommentNotificationTemplate;
    }

    public function setCaseCreateNotificationTemplate(string $caseCreateNotificationTemplate)
    {
        $this->caseCreateNotificationTemplate = $caseCreateNotificationTemplate;
    }

    public function setCaseFeedItemSettings(array $caseFeedItemSettings)
    {
        $this->caseFeedItemSettings = $caseFeedItemSettings;
    }

    public function setCaseFeedReadUnreadLtng(bool $caseFeedReadUnreadLtng)
    {
        $this->caseFeedReadUnreadLtng = $caseFeedReadUnreadLtng;
    }

    public function setCaseMergeInLightning(bool $caseMergeInLightning)
    {
        $this->caseMergeInLightning = $caseMergeInLightning;
    }

    public function setCloseCaseThroughStatusChange(bool $closeCaseThroughStatusChange)
    {
        $this->closeCaseThroughStatusChange = $closeCaseThroughStatusChange;
    }

    public function setDefaultCaseFeedLayoutOn(bool $defaultCaseFeedLayoutOn)
    {
        $this->defaultCaseFeedLayoutOn = $defaultCaseFeedLayoutOn;
    }

    public function setDefaultCaseOwner(string $defaultCaseOwner)
    {
        $this->defaultCaseOwner = $defaultCaseOwner;
    }

    public function setDefaultCaseOwnerType(string $defaultCaseOwnerType)
    {
        $this->defaultCaseOwnerType = $defaultCaseOwnerType;
    }

    public function setDefaultCaseUser(string $defaultCaseUser)
    {
        $this->defaultCaseUser = $defaultCaseUser;
    }

    public function setEmailActionDefaultsHandlerClass(string $emailActionDefaultsHandlerClass)
    {
        $this->emailActionDefaultsHandlerClass = $emailActionDefaultsHandlerClass;
    }

    public function setEmailToCase(EmailToCaseSettings $emailToCase)
    {
        $this->emailToCase = $emailToCase;
    }

    public function setEnableCaseFeed(bool $enableCaseFeed)
    {
        $this->enableCaseFeed = $enableCaseFeed;
    }

    public function setEnableCollapseEmailThread(bool $enableCollapseEmailThread)
    {
        $this->enableCollapseEmailThread = $enableCollapseEmailThread;
    }

    public function setEnableDraftEmails(bool $enableDraftEmails)
    {
        $this->enableDraftEmails = $enableDraftEmails;
    }

    public function setEnableEarlyEscalationRuleTriggers(bool $enableEarlyEscalationRuleTriggers)
    {
        $this->enableEarlyEscalationRuleTriggers = $enableEarlyEscalationRuleTriggers;
    }

    public function setEnableEmailActionDefaultsHandler(bool $enableEmailActionDefaultsHandler)
    {
        $this->enableEmailActionDefaultsHandler = $enableEmailActionDefaultsHandler;
    }

    public function setEnableSuggestedArticlesApplication(bool $enableSuggestedArticlesApplication)
    {
        $this->enableSuggestedArticlesApplication = $enableSuggestedArticlesApplication;
    }

    public function setEnableSuggestedArticlesCustomerPortal(bool $enableSuggestedArticlesCustomerPortal)
    {
        $this->enableSuggestedArticlesCustomerPortal = $enableSuggestedArticlesCustomerPortal;
    }

    public function setEnableSuggestedArticlesPartnerPortal(bool $enableSuggestedArticlesPartnerPortal)
    {
        $this->enableSuggestedArticlesPartnerPortal = $enableSuggestedArticlesPartnerPortal;
    }

    public function setEnableSuggestedSolutions(bool $enableSuggestedSolutions)
    {
        $this->enableSuggestedSolutions = $enableSuggestedSolutions;
    }

    public function setEscalateCaseBefore(bool $escalateCaseBefore)
    {
        $this->escalateCaseBefore = $escalateCaseBefore;
    }

    public function setGenericMessageEnabled(bool $genericMessageEnabled)
    {
        $this->genericMessageEnabled = $genericMessageEnabled;
    }

    public function setKeepRecordTypeOnAssignmentRule(bool $keepRecordTypeOnAssignmentRule)
    {
        $this->keepRecordTypeOnAssignmentRule = $keepRecordTypeOnAssignmentRule;
    }

    public function setNotifyContactOnCaseComment(bool $notifyContactOnCaseComment)
    {
        $this->notifyContactOnCaseComment = $notifyContactOnCaseComment;
    }

    public function setNotifyDefaultCaseOwner(bool $notifyDefaultCaseOwner)
    {
        $this->notifyDefaultCaseOwner = $notifyDefaultCaseOwner;
    }

    public function setNotifyOwnerOnCaseComment(bool $notifyOwnerOnCaseComment)
    {
        $this->notifyOwnerOnCaseComment = $notifyOwnerOnCaseComment;
    }

    public function setNotifyOwnerOnCaseOwnerChange(bool $notifyOwnerOnCaseOwnerChange)
    {
        $this->notifyOwnerOnCaseOwnerChange = $notifyOwnerOnCaseOwnerChange;
    }

    public function setPredictiveSupportEnabled(bool $predictiveSupportEnabled)
    {
        $this->predictiveSupportEnabled = $predictiveSupportEnabled;
    }

    public function setShowEmailAttachmentsInCaseAttachmentsRL(bool $showEmailAttachmentsInCaseAttachmentsRL)
    {
        $this->showEmailAttachmentsInCaseAttachmentsRL = $showEmailAttachmentsInCaseAttachmentsRL;
    }

    public function setShowFewerCloseActions(bool $showFewerCloseActions)
    {
        $this->showFewerCloseActions = $showFewerCloseActions;
    }

    public function setSystemUserEmail(string $systemUserEmail)
    {
        $this->systemUserEmail = $systemUserEmail;
    }

    public function setUseSystemEmailAddress(bool $useSystemEmailAddress)
    {
        $this->useSystemEmailAddress = $useSystemEmailAddress;
    }

    public function setUseSystemUserAsDefaultCaseUser(bool $useSystemUserAsDefaultCaseUser)
    {
        $this->useSystemUserAsDefaultCaseUser = $useSystemUserAsDefaultCaseUser;
    }

    public function setWebToCase(WebToCaseSettings $webToCase)
    {
        $this->webToCase = $webToCase;
    }
}
