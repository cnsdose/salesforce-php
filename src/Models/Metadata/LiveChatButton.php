<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatButton
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $animation
 * @property string|null $autoGreeting
 * @property int|null $chasitorIdleTimeout
 * @property int|null $chasitorIdleTimeoutWarning
 * @property string|null $chatPage
 * @property string|null $customAgentName
 * @property LiveChatButtonDeployments|null $deployments
 * @property bool|null $enableQueue
 * @property string|null $inviteEndPosition
 * @property string|null $inviteImage
 * @property string|null $inviteStartPosition
 * @property bool|null $isActive
 * @property string|null $label
 * @property int|null $numberOfReroutingAttempts
 * @property string|null $offlineImage
 * @property string|null $onlineImage
 * @property bool|null $optionsCustomRoutingIsEnabled
 * @property bool|null $optionsHasChasitorIdleTimeout
 * @property bool|null $optionsHasInviteAfterAccept
 * @property bool|null $optionsHasInviteAfterReject
 * @property bool|null $optionsHasRerouteDeclinedRequest
 * @property bool|null $optionsIsAutoAccept
 * @property bool|null $optionsIsInviteAutoRemove
 * @property int|null $overallQueueLength
 * @property int|null $perAgentQueueLength
 * @property string|null $postChatPage
 * @property string|null $postChatUrl
 * @property string|null $preChatFormPage
 * @property string|null $preChatFormUrl
 * @property int|null $pushTimeOut
 * @property string|null $routingType
 * @property string|null $site
 * @property LiveChatButtonSkills|null $skills
 * @property int|null $timeToRemoveInvite
 * @property string|null $type
 * @property string|null $windowLanguage
 */
class LiveChatButton extends Metadata
{
    public static $classMap = [
        'deployments' => [
            'multiple' => false,
            'type' => LiveChatButtonDeployments::class,
        ],
        'skills' => [
            'multiple' => false,
            'type' => LiveChatButtonSkills::class,
        ],
    ];

    public function setAnimation(LiveChatButtonPresentation $animation)
    {
        $this->animation = $animation->getValue();
    }

    public function setAutoGreeting(string $autoGreeting)
    {
        $this->autoGreeting = $autoGreeting;
    }

    public function setChasitorIdleTimeout(int $chasitorIdleTimeout)
    {
        $this->chasitorIdleTimeout = $chasitorIdleTimeout;
    }

    public function setChasitorIdleTimeoutWarning(int $chasitorIdleTimeoutWarning)
    {
        $this->chasitorIdleTimeoutWarning = $chasitorIdleTimeoutWarning;
    }

    public function setChatPage(string $chatPage)
    {
        $this->chatPage = $chatPage;
    }

    public function setCustomAgentName(string $customAgentName)
    {
        $this->customAgentName = $customAgentName;
    }

    public function setDeployments(LiveChatButtonDeployments $deployments)
    {
        $this->deployments = $deployments;
    }

    public function setEnableQueue(bool $enableQueue)
    {
        $this->enableQueue = $enableQueue;
    }

    public function setInviteEndPosition(LiveChatButtonInviteEndPosition $inviteEndPosition)
    {
        $this->inviteEndPosition = $inviteEndPosition->getValue();
    }

    public function setInviteImage(string $inviteImage)
    {
        $this->inviteImage = $inviteImage;
    }

    public function setInviteStartPosition(LiveChatButtonInviteStartPosition $inviteStartPosition)
    {
        $this->inviteStartPosition = $inviteStartPosition->getValue();
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setNumberOfReroutingAttempts(int $numberOfReroutingAttempts)
    {
        $this->numberOfReroutingAttempts = $numberOfReroutingAttempts;
    }

    public function setOfflineImage(string $offlineImage)
    {
        $this->offlineImage = $offlineImage;
    }

    public function setOnlineImage(string $onlineImage)
    {
        $this->onlineImage = $onlineImage;
    }

    public function setOptionsCustomRoutingIsEnabled(bool $optionsCustomRoutingIsEnabled)
    {
        $this->optionsCustomRoutingIsEnabled = $optionsCustomRoutingIsEnabled;
    }

    public function setOptionsHasChasitorIdleTimeout(bool $optionsHasChasitorIdleTimeout)
    {
        $this->optionsHasChasitorIdleTimeout = $optionsHasChasitorIdleTimeout;
    }

    public function setOptionsHasInviteAfterAccept(bool $optionsHasInviteAfterAccept)
    {
        $this->optionsHasInviteAfterAccept = $optionsHasInviteAfterAccept;
    }

    public function setOptionsHasInviteAfterReject(bool $optionsHasInviteAfterReject)
    {
        $this->optionsHasInviteAfterReject = $optionsHasInviteAfterReject;
    }

    public function setOptionsHasRerouteDeclinedRequest(bool $optionsHasRerouteDeclinedRequest)
    {
        $this->optionsHasRerouteDeclinedRequest = $optionsHasRerouteDeclinedRequest;
    }

    public function setOptionsIsAutoAccept(bool $optionsIsAutoAccept)
    {
        $this->optionsIsAutoAccept = $optionsIsAutoAccept;
    }

    public function setOptionsIsInviteAutoRemove(bool $optionsIsInviteAutoRemove)
    {
        $this->optionsIsInviteAutoRemove = $optionsIsInviteAutoRemove;
    }

    public function setOverallQueueLength(int $overallQueueLength)
    {
        $this->overallQueueLength = $overallQueueLength;
    }

    public function setPerAgentQueueLength(int $perAgentQueueLength)
    {
        $this->perAgentQueueLength = $perAgentQueueLength;
    }

    public function setPostChatPage(string $postChatPage)
    {
        $this->postChatPage = $postChatPage;
    }

    public function setPostChatUrl(string $postChatUrl)
    {
        $this->postChatUrl = $postChatUrl;
    }

    public function setPreChatFormPage(string $preChatFormPage)
    {
        $this->preChatFormPage = $preChatFormPage;
    }

    public function setPreChatFormUrl(string $preChatFormUrl)
    {
        $this->preChatFormUrl = $preChatFormUrl;
    }

    public function setPushTimeOut(int $pushTimeOut)
    {
        $this->pushTimeOut = $pushTimeOut;
    }

    public function setRoutingType(LiveChatButtonRoutingType $routingType)
    {
        $this->routingType = $routingType->getValue();
    }

    public function setSite(string $site)
    {
        $this->site = $site;
    }

    public function setSkills(LiveChatButtonSkills $skills)
    {
        $this->skills = $skills;
    }

    public function setTimeToRemoveInvite(int $timeToRemoveInvite)
    {
        $this->timeToRemoveInvite = $timeToRemoveInvite;
    }

    public function setType(LiveChatButtonType $type)
    {
        $this->type = $type->getValue();
    }

    public function setWindowLanguage(Language $windowLanguage)
    {
        $this->windowLanguage = $windowLanguage->getValue();
    }
}
