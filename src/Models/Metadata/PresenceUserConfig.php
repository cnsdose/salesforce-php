<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PresenceUserConfig
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PresenceConfigAssignments|null $assignments
 * @property int|null $capacity
 * @property string[]|null $declineReasons
 * @property bool|null $enableAutoAccept
 * @property bool|null $enableDecline
 * @property bool|null $enableDeclineReason
 * @property bool|null $enableDisconnectSound
 * @property bool|null $enableRequestSound
 * @property string|null $label
 * @property string|null $presenceStatusOnDecline
 * @property string|null $presenceStatusOnPushTimeout
 */
class PresenceUserConfig extends Metadata
{
    public static $classMap = [
        'assignments' => [
            'multiple' => false,
            'type' => PresenceConfigAssignments::class,
        ],
    ];

    public function setAssignments(PresenceConfigAssignments $assignments)
    {
        $this->assignments = $assignments;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function setDeclineReasons(array $declineReasons)
    {
        $this->declineReasons = $declineReasons;
    }

    public function setEnableAutoAccept(bool $enableAutoAccept)
    {
        $this->enableAutoAccept = $enableAutoAccept;
    }

    public function setEnableDecline(bool $enableDecline)
    {
        $this->enableDecline = $enableDecline;
    }

    public function setEnableDeclineReason(bool $enableDeclineReason)
    {
        $this->enableDeclineReason = $enableDeclineReason;
    }

    public function setEnableDisconnectSound(bool $enableDisconnectSound)
    {
        $this->enableDisconnectSound = $enableDisconnectSound;
    }

    public function setEnableRequestSound(bool $enableRequestSound)
    {
        $this->enableRequestSound = $enableRequestSound;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPresenceStatusOnDecline(string $presenceStatusOnDecline)
    {
        $this->presenceStatusOnDecline = $presenceStatusOnDecline;
    }

    public function setPresenceStatusOnPushTimeout(string $presenceStatusOnPushTimeout)
    {
        $this->presenceStatusOnPushTimeout = $presenceStatusOnPushTimeout;
    }
}
