<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Network
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowInternalUserLogin
 * @property bool|null $allowMembersToFlag
 * @property string|null $allowedExtensions
 * @property string|null $caseCommentEmailTemplate
 * @property string|null $changePasswordTemplate
 * @property CommunityRoles|null $communityRoles
 * @property string|null $description
 * @property bool|null $disableReputationRecordConversations
 * @property string|null $emailFooterLogo
 * @property string|null $emailFooterText
 * @property string|null $emailSenderAddress
 * @property string|null $emailSenderName
 * @property bool|null $enableCustomVFErrorPageOverrides
 * @property bool|null $enableDirectMessages
 * @property bool|null $enableGuestChatter
 * @property bool|null $enableGuestFileAccess
 * @property bool|null $enableGuestMemberVisibility
 * @property bool|null $enableInvitation
 * @property bool|null $enableKnowledgeable
 * @property bool|null $enableMemberVisibility
 * @property bool|null $enableNicknameDisplay
 * @property bool|null $enablePrivateMessages
 * @property bool|null $enableReputation
 * @property bool|null $enableShowAllNetworkSettings
 * @property bool|null $enableSiteAsContainer
 * @property bool|null $enableTalkingAboutStats
 * @property bool|null $enableTopicAssignmentRules
 * @property bool|null $enableTopicSuggestions
 * @property bool|null $enableUpDownVote
 * @property string|null $feedChannel
 * @property string|null $forgotPasswordTemplate
 * @property bool|null $gatherCustomerSentimentData
 * @property string|null $lockoutTemplate
 * @property string|null $logoutUrl
 * @property int|null $maxFileSizeKb
 * @property NavigationLinkSet|null $navigationLinkSet
 * @property NetworkMemberGroup|null $networkMemberGroups
 * @property NetworkPageOverride|null $networkPageOverrides
 * @property string|null $newSenderAddress
 * @property string|null $picassoSite
 * @property RecommendationAudience|null $recommendationAudience
 * @property RecommendationDefinition|null $recommendationDefinition
 * @property ReputationLevelDefinitions|null $reputationLevels
 * @property ReputationPointsRules|null $reputationPointsRules
 * @property string|null $selfRegProfile
 * @property bool|null $selfRegistration
 * @property bool|null $sendWelcomeEmail
 * @property string|null $site
 * @property string|null $status
 * @property NetworkTabSet|null $tabs
 * @property string|null $urlPathPrefix
 * @property string|null $verificationTemplate
 * @property string|null $welcomeTemplate
 */
class Network extends Metadata
{
    public static $classMap = [
        'communityRoles' => [
            'multiple' => false,
            'type' => CommunityRoles::class,
        ],
        'navigationLinkSet' => [
            'multiple' => false,
            'type' => NavigationLinkSet::class,
        ],
        'networkMemberGroups' => [
            'multiple' => false,
            'type' => NetworkMemberGroup::class,
        ],
        'networkPageOverrides' => [
            'multiple' => false,
            'type' => NetworkPageOverride::class,
        ],
        'recommendationAudience' => [
            'multiple' => false,
            'type' => RecommendationAudience::class,
        ],
        'recommendationDefinition' => [
            'multiple' => false,
            'type' => RecommendationDefinition::class,
        ],
        'reputationLevels' => [
            'multiple' => false,
            'type' => ReputationLevelDefinitions::class,
        ],
        'reputationPointsRules' => [
            'multiple' => false,
            'type' => ReputationPointsRules::class,
        ],
        'tabs' => [
            'multiple' => false,
            'type' => NetworkTabSet::class,
        ],
    ];

    public function setAllowInternalUserLogin(bool $allowInternalUserLogin)
    {
        $this->allowInternalUserLogin = $allowInternalUserLogin;
    }

    public function setAllowMembersToFlag(bool $allowMembersToFlag)
    {
        $this->allowMembersToFlag = $allowMembersToFlag;
    }

    public function setAllowedExtensions(string $allowedExtensions)
    {
        $this->allowedExtensions = $allowedExtensions;
    }

    public function setCaseCommentEmailTemplate(string $caseCommentEmailTemplate)
    {
        $this->caseCommentEmailTemplate = $caseCommentEmailTemplate;
    }

    public function setChangePasswordTemplate(string $changePasswordTemplate)
    {
        $this->changePasswordTemplate = $changePasswordTemplate;
    }

    public function setCommunityRoles(CommunityRoles $communityRoles)
    {
        $this->communityRoles = $communityRoles;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisableReputationRecordConversations(bool $disableReputationRecordConversations)
    {
        $this->disableReputationRecordConversations = $disableReputationRecordConversations;
    }

    public function setEmailFooterLogo(string $emailFooterLogo)
    {
        $this->emailFooterLogo = $emailFooterLogo;
    }

    public function setEmailFooterText(string $emailFooterText)
    {
        $this->emailFooterText = $emailFooterText;
    }

    public function setEmailSenderAddress(string $emailSenderAddress)
    {
        $this->emailSenderAddress = $emailSenderAddress;
    }

    public function setEmailSenderName(string $emailSenderName)
    {
        $this->emailSenderName = $emailSenderName;
    }

    public function setEnableCustomVFErrorPageOverrides(bool $enableCustomVFErrorPageOverrides)
    {
        $this->enableCustomVFErrorPageOverrides = $enableCustomVFErrorPageOverrides;
    }

    public function setEnableDirectMessages(bool $enableDirectMessages)
    {
        $this->enableDirectMessages = $enableDirectMessages;
    }

    public function setEnableGuestChatter(bool $enableGuestChatter)
    {
        $this->enableGuestChatter = $enableGuestChatter;
    }

    public function setEnableGuestFileAccess(bool $enableGuestFileAccess)
    {
        $this->enableGuestFileAccess = $enableGuestFileAccess;
    }

    public function setEnableGuestMemberVisibility(bool $enableGuestMemberVisibility)
    {
        $this->enableGuestMemberVisibility = $enableGuestMemberVisibility;
    }

    public function setEnableInvitation(bool $enableInvitation)
    {
        $this->enableInvitation = $enableInvitation;
    }

    public function setEnableKnowledgeable(bool $enableKnowledgeable)
    {
        $this->enableKnowledgeable = $enableKnowledgeable;
    }

    public function setEnableMemberVisibility(bool $enableMemberVisibility)
    {
        $this->enableMemberVisibility = $enableMemberVisibility;
    }

    public function setEnableNicknameDisplay(bool $enableNicknameDisplay)
    {
        $this->enableNicknameDisplay = $enableNicknameDisplay;
    }

    public function setEnablePrivateMessages(bool $enablePrivateMessages)
    {
        $this->enablePrivateMessages = $enablePrivateMessages;
    }

    public function setEnableReputation(bool $enableReputation)
    {
        $this->enableReputation = $enableReputation;
    }

    public function setEnableShowAllNetworkSettings(bool $enableShowAllNetworkSettings)
    {
        $this->enableShowAllNetworkSettings = $enableShowAllNetworkSettings;
    }

    public function setEnableSiteAsContainer(bool $enableSiteAsContainer)
    {
        $this->enableSiteAsContainer = $enableSiteAsContainer;
    }

    public function setEnableTalkingAboutStats(bool $enableTalkingAboutStats)
    {
        $this->enableTalkingAboutStats = $enableTalkingAboutStats;
    }

    public function setEnableTopicAssignmentRules(bool $enableTopicAssignmentRules)
    {
        $this->enableTopicAssignmentRules = $enableTopicAssignmentRules;
    }

    public function setEnableTopicSuggestions(bool $enableTopicSuggestions)
    {
        $this->enableTopicSuggestions = $enableTopicSuggestions;
    }

    public function setEnableUpDownVote(bool $enableUpDownVote)
    {
        $this->enableUpDownVote = $enableUpDownVote;
    }

    public function setFeedChannel(string $feedChannel)
    {
        $this->feedChannel = $feedChannel;
    }

    public function setForgotPasswordTemplate(string $forgotPasswordTemplate)
    {
        $this->forgotPasswordTemplate = $forgotPasswordTemplate;
    }

    public function setGatherCustomerSentimentData(bool $gatherCustomerSentimentData)
    {
        $this->gatherCustomerSentimentData = $gatherCustomerSentimentData;
    }

    public function setLockoutTemplate(string $lockoutTemplate)
    {
        $this->lockoutTemplate = $lockoutTemplate;
    }

    public function setLogoutUrl(string $logoutUrl)
    {
        $this->logoutUrl = $logoutUrl;
    }

    public function setMaxFileSizeKb(int $maxFileSizeKb)
    {
        $this->maxFileSizeKb = $maxFileSizeKb;
    }

    public function setNavigationLinkSet(NavigationLinkSet $navigationLinkSet)
    {
        $this->navigationLinkSet = $navigationLinkSet;
    }

    public function setNetworkMemberGroups(NetworkMemberGroup $networkMemberGroups)
    {
        $this->networkMemberGroups = $networkMemberGroups;
    }

    public function setNetworkPageOverrides(NetworkPageOverride $networkPageOverrides)
    {
        $this->networkPageOverrides = $networkPageOverrides;
    }

    public function setNewSenderAddress(string $newSenderAddress)
    {
        $this->newSenderAddress = $newSenderAddress;
    }

    public function setPicassoSite(string $picassoSite)
    {
        $this->picassoSite = $picassoSite;
    }

    public function setRecommendationAudience(RecommendationAudience $recommendationAudience)
    {
        $this->recommendationAudience = $recommendationAudience;
    }

    public function setRecommendationDefinition(RecommendationDefinition $recommendationDefinition)
    {
        $this->recommendationDefinition = $recommendationDefinition;
    }

    public function setReputationLevels(ReputationLevelDefinitions $reputationLevels)
    {
        $this->reputationLevels = $reputationLevels;
    }

    public function setReputationPointsRules(ReputationPointsRules $reputationPointsRules)
    {
        $this->reputationPointsRules = $reputationPointsRules;
    }

    public function setSelfRegProfile(string $selfRegProfile)
    {
        $this->selfRegProfile = $selfRegProfile;
    }

    public function setSelfRegistration(bool $selfRegistration)
    {
        $this->selfRegistration = $selfRegistration;
    }

    public function setSendWelcomeEmail(bool $sendWelcomeEmail)
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }

    public function setStatus(NetworkStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setTabs(NetworkTabSet $tabs)
    {
        $this->tabs = $tabs;
    }

    public function setUrlPathPrefix(string $urlPathPrefix)
    {
        $this->urlPathPrefix = $urlPathPrefix;
    }

    public function setVerificationTemplate(string $verificationTemplate)
    {
        $this->verificationTemplate = $verificationTemplate;
    }

    public function setWelcomeTemplate(string $welcomeTemplate)
    {
        $this->welcomeTemplate = $welcomeTemplate;
    }
}
