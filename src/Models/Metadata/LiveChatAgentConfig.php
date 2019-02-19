<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LiveChatAgentConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AgentConfigAssignments|null $assignments
 * @property string|null $autoGreeting
 * @property int|null $capacity
 * @property int|null $criticalWaitTime
 * @property string|null $customAgentName
 * @property bool|null $enableAgentFileTransfer
 * @property bool|null $enableAgentSneakPeek
 * @property bool|null $enableAssistanceFlag
 * @property bool|null $enableAutoAwayOnDecline
 * @property bool|null $enableAutoAwayOnPushTimeout
 * @property bool|null $enableChatConferencing
 * @property bool|null $enableChatMonitoring
 * @property bool|null $enableChatTransferToAgent
 * @property bool|null $enableChatTransferToButton
 * @property bool|null $enableChatTransferToSkill
 * @property bool|null $enableLogoutSound
 * @property bool|null $enableNotifications
 * @property bool|null $enableRequestSound
 * @property bool|null $enableSneakPeek
 * @property bool|null $enableVisitorBlocking
 * @property bool|null $enableWhisperMessage
 * @property string|null $label
 * @property string|null $supervisorDefaultAgentStatusFilter
 * @property string|null $supervisorDefaultButtonFilter
 * @property string|null $supervisorDefaultSkillFilter
 * @property SupervisorAgentConfigSkills|null $supervisorSkills
 * @property AgentConfigButtons|null $transferableButtons
 * @property AgentConfigSkills|null $transferableSkills
 */
class LiveChatAgentConfig extends Metadata
{
    public static $classMap = [
        'assignments' => [
            'multiple' => false,
            'type' => AgentConfigAssignments::class,
        ],
        'supervisorSkills' => [
            'multiple' => false,
            'type' => SupervisorAgentConfigSkills::class,
        ],
        'transferableButtons' => [
            'multiple' => false,
            'type' => AgentConfigButtons::class,
        ],
        'transferableSkills' => [
            'multiple' => false,
            'type' => AgentConfigSkills::class,
        ],
    ];

    public function setAssignments(AgentConfigAssignments $assignments)
    {
        $this->assignments = $assignments;
    }

    public function setAutoGreeting(string $autoGreeting)
    {
        $this->autoGreeting = $autoGreeting;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function setCriticalWaitTime(int $criticalWaitTime)
    {
        $this->criticalWaitTime = $criticalWaitTime;
    }

    public function setCustomAgentName(string $customAgentName)
    {
        $this->customAgentName = $customAgentName;
    }

    public function setEnableAgentFileTransfer(bool $enableAgentFileTransfer)
    {
        $this->enableAgentFileTransfer = $enableAgentFileTransfer;
    }

    public function setEnableAgentSneakPeek(bool $enableAgentSneakPeek)
    {
        $this->enableAgentSneakPeek = $enableAgentSneakPeek;
    }

    public function setEnableAssistanceFlag(bool $enableAssistanceFlag)
    {
        $this->enableAssistanceFlag = $enableAssistanceFlag;
    }

    public function setEnableAutoAwayOnDecline(bool $enableAutoAwayOnDecline)
    {
        $this->enableAutoAwayOnDecline = $enableAutoAwayOnDecline;
    }

    public function setEnableAutoAwayOnPushTimeout(bool $enableAutoAwayOnPushTimeout)
    {
        $this->enableAutoAwayOnPushTimeout = $enableAutoAwayOnPushTimeout;
    }

    public function setEnableChatConferencing(bool $enableChatConferencing)
    {
        $this->enableChatConferencing = $enableChatConferencing;
    }

    public function setEnableChatMonitoring(bool $enableChatMonitoring)
    {
        $this->enableChatMonitoring = $enableChatMonitoring;
    }

    public function setEnableChatTransferToAgent(bool $enableChatTransferToAgent)
    {
        $this->enableChatTransferToAgent = $enableChatTransferToAgent;
    }

    public function setEnableChatTransferToButton(bool $enableChatTransferToButton)
    {
        $this->enableChatTransferToButton = $enableChatTransferToButton;
    }

    public function setEnableChatTransferToSkill(bool $enableChatTransferToSkill)
    {
        $this->enableChatTransferToSkill = $enableChatTransferToSkill;
    }

    public function setEnableLogoutSound(bool $enableLogoutSound)
    {
        $this->enableLogoutSound = $enableLogoutSound;
    }

    public function setEnableNotifications(bool $enableNotifications)
    {
        $this->enableNotifications = $enableNotifications;
    }

    public function setEnableRequestSound(bool $enableRequestSound)
    {
        $this->enableRequestSound = $enableRequestSound;
    }

    public function setEnableSneakPeek(bool $enableSneakPeek)
    {
        $this->enableSneakPeek = $enableSneakPeek;
    }

    public function setEnableVisitorBlocking(bool $enableVisitorBlocking)
    {
        $this->enableVisitorBlocking = $enableVisitorBlocking;
    }

    public function setEnableWhisperMessage(bool $enableWhisperMessage)
    {
        $this->enableWhisperMessage = $enableWhisperMessage;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setSupervisorDefaultAgentStatusFilter(SupervisorAgentStatusFilter $supervisorDefaultAgentStatusFilter)
    {
        $this->supervisorDefaultAgentStatusFilter = $supervisorDefaultAgentStatusFilter->getValue();
    }

    public function setSupervisorDefaultButtonFilter(string $supervisorDefaultButtonFilter)
    {
        $this->supervisorDefaultButtonFilter = $supervisorDefaultButtonFilter;
    }

    public function setSupervisorDefaultSkillFilter(string $supervisorDefaultSkillFilter)
    {
        $this->supervisorDefaultSkillFilter = $supervisorDefaultSkillFilter;
    }

    public function setSupervisorSkills(SupervisorAgentConfigSkills $supervisorSkills)
    {
        $this->supervisorSkills = $supervisorSkills;
    }

    public function setTransferableButtons(AgentConfigButtons $transferableButtons)
    {
        $this->transferableButtons = $transferableButtons;
    }

    public function setTransferableSkills(AgentConfigSkills $transferableSkills)
    {
        $this->transferableSkills = $transferableSkills;
    }
}
