<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UserEngagementSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canGovCloudUseAdoptionApps
 * @property bool|null $doesScheduledSwitcherRunDaily
 * @property bool|null $enableCustomHelpGlobalSection
 * @property bool|null $enableHelpMenuShowFeedback
 * @property bool|null $enableHelpMenuShowHelp
 * @property bool|null $enableHelpMenuShowNewUser
 * @property bool|null $enableHelpMenuShowSearch
 * @property bool|null $enableHelpMenuShowSfdcContent
 * @property bool|null $enableHelpMenuShowShortcut
 * @property bool|null $enableHelpMenuShowSupport
 * @property bool|null $enableHelpMenuShowTrailhead
 * @property bool|null $enableIBILOptOutDashboards
 * @property bool|null $enableIBILOptOutEvents
 * @property bool|null $enableIBILOptOutReports
 * @property bool|null $enableIBILOptOutTasks
 * @property bool|null $enableLexToClassicFeedbackEnable
 * @property bool|null $enableOrchestrationInSandbox
 * @property bool|null $enableOrgUserAssistEnabled
 * @property bool|null $enableScheduledSwitcher
 * @property bool|null $enableSfdcProductFeedbackSurvey
 * @property bool|null $enableShowSalesforceUserAssist
 * @property bool|null $isAutoTransitionDelayed
 * @property bool|null $isCrucNotificationDisabled
 * @property bool|null $isCustomProfileAutoTransitionDelayed
 * @property bool|null $isLEXWelcomeMatDisabled
 * @property bool|null $isMeetTheAssistantDisabledInClassic
 * @property bool|null $isMeetTheAssistantDisabledInLightning
 * @property bool|null $optimizerAppEnabled
 */
class UserEngagementSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanGovCloudUseAdoptionApps(bool $canGovCloudUseAdoptionApps)
    {
        $this->canGovCloudUseAdoptionApps = $canGovCloudUseAdoptionApps;
    }

    public function setDoesScheduledSwitcherRunDaily(bool $doesScheduledSwitcherRunDaily)
    {
        $this->doesScheduledSwitcherRunDaily = $doesScheduledSwitcherRunDaily;
    }

    public function setEnableCustomHelpGlobalSection(bool $enableCustomHelpGlobalSection)
    {
        $this->enableCustomHelpGlobalSection = $enableCustomHelpGlobalSection;
    }

    public function setEnableHelpMenuShowFeedback(bool $enableHelpMenuShowFeedback)
    {
        $this->enableHelpMenuShowFeedback = $enableHelpMenuShowFeedback;
    }

    public function setEnableHelpMenuShowHelp(bool $enableHelpMenuShowHelp)
    {
        $this->enableHelpMenuShowHelp = $enableHelpMenuShowHelp;
    }

    public function setEnableHelpMenuShowNewUser(bool $enableHelpMenuShowNewUser)
    {
        $this->enableHelpMenuShowNewUser = $enableHelpMenuShowNewUser;
    }

    public function setEnableHelpMenuShowSearch(bool $enableHelpMenuShowSearch)
    {
        $this->enableHelpMenuShowSearch = $enableHelpMenuShowSearch;
    }

    public function setEnableHelpMenuShowSfdcContent(bool $enableHelpMenuShowSfdcContent)
    {
        $this->enableHelpMenuShowSfdcContent = $enableHelpMenuShowSfdcContent;
    }

    public function setEnableHelpMenuShowShortcut(bool $enableHelpMenuShowShortcut)
    {
        $this->enableHelpMenuShowShortcut = $enableHelpMenuShowShortcut;
    }

    public function setEnableHelpMenuShowSupport(bool $enableHelpMenuShowSupport)
    {
        $this->enableHelpMenuShowSupport = $enableHelpMenuShowSupport;
    }

    public function setEnableHelpMenuShowTrailhead(bool $enableHelpMenuShowTrailhead)
    {
        $this->enableHelpMenuShowTrailhead = $enableHelpMenuShowTrailhead;
    }

    public function setEnableIBILOptOutDashboards(bool $enableIBILOptOutDashboards)
    {
        $this->enableIBILOptOutDashboards = $enableIBILOptOutDashboards;
    }

    public function setEnableIBILOptOutEvents(bool $enableIBILOptOutEvents)
    {
        $this->enableIBILOptOutEvents = $enableIBILOptOutEvents;
    }

    public function setEnableIBILOptOutReports(bool $enableIBILOptOutReports)
    {
        $this->enableIBILOptOutReports = $enableIBILOptOutReports;
    }

    public function setEnableIBILOptOutTasks(bool $enableIBILOptOutTasks)
    {
        $this->enableIBILOptOutTasks = $enableIBILOptOutTasks;
    }

    public function setEnableLexToClassicFeedbackEnable(bool $enableLexToClassicFeedbackEnable)
    {
        $this->enableLexToClassicFeedbackEnable = $enableLexToClassicFeedbackEnable;
    }

    public function setEnableOrchestrationInSandbox(bool $enableOrchestrationInSandbox)
    {
        $this->enableOrchestrationInSandbox = $enableOrchestrationInSandbox;
    }

    public function setEnableOrgUserAssistEnabled(bool $enableOrgUserAssistEnabled)
    {
        $this->enableOrgUserAssistEnabled = $enableOrgUserAssistEnabled;
    }

    public function setEnableScheduledSwitcher(bool $enableScheduledSwitcher)
    {
        $this->enableScheduledSwitcher = $enableScheduledSwitcher;
    }

    public function setEnableSfdcProductFeedbackSurvey(bool $enableSfdcProductFeedbackSurvey)
    {
        $this->enableSfdcProductFeedbackSurvey = $enableSfdcProductFeedbackSurvey;
    }

    public function setEnableShowSalesforceUserAssist(bool $enableShowSalesforceUserAssist)
    {
        $this->enableShowSalesforceUserAssist = $enableShowSalesforceUserAssist;
    }

    public function setIsAutoTransitionDelayed(bool $isAutoTransitionDelayed)
    {
        $this->isAutoTransitionDelayed = $isAutoTransitionDelayed;
    }

    public function setIsCrucNotificationDisabled(bool $isCrucNotificationDisabled)
    {
        $this->isCrucNotificationDisabled = $isCrucNotificationDisabled;
    }

    public function setIsCustomProfileAutoTransitionDelayed(bool $isCustomProfileAutoTransitionDelayed)
    {
        $this->isCustomProfileAutoTransitionDelayed = $isCustomProfileAutoTransitionDelayed;
    }

    public function setIsLEXWelcomeMatDisabled(bool $isLEXWelcomeMatDisabled)
    {
        $this->isLEXWelcomeMatDisabled = $isLEXWelcomeMatDisabled;
    }

    public function setIsMeetTheAssistantDisabledInClassic(bool $isMeetTheAssistantDisabledInClassic)
    {
        $this->isMeetTheAssistantDisabledInClassic = $isMeetTheAssistantDisabledInClassic;
    }

    public function setIsMeetTheAssistantDisabledInLightning(bool $isMeetTheAssistantDisabledInLightning)
    {
        $this->isMeetTheAssistantDisabledInLightning = $isMeetTheAssistantDisabledInLightning;
    }

    public function setOptimizerAppEnabled(bool $optimizerAppEnabled)
    {
        $this->optimizerAppEnabled = $optimizerAppEnabled;
    }
}
