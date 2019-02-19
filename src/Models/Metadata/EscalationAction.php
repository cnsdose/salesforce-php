<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EscalationAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignedTo
 * @property string|null $assignedToTemplate
 * @property string|null $assignedToType
 * @property int|null $minutesToEscalation
 * @property bool|null $notifyCaseOwner
 * @property string[]|null $notifyEmail
 * @property string|null $notifyTo
 * @property string|null $notifyToTemplate
 */
class EscalationAction
{
    public static $classMap = [
    ];

    public function setAssignedTo(string $assignedTo)
    {
        $this->assignedTo = $assignedTo;
    }

    public function setAssignedToTemplate(string $assignedToTemplate)
    {
        $this->assignedToTemplate = $assignedToTemplate;
    }

    public function setAssignedToType(AssignToLookupValueType $assignedToType)
    {
        $this->assignedToType = $assignedToType->getValue();
    }

    public function setMinutesToEscalation(int $minutesToEscalation)
    {
        $this->minutesToEscalation = $minutesToEscalation;
    }

    public function setNotifyCaseOwner(bool $notifyCaseOwner)
    {
        $this->notifyCaseOwner = $notifyCaseOwner;
    }

    public function setNotifyEmail(array $notifyEmail)
    {
        $this->notifyEmail = $notifyEmail;
    }

    public function setNotifyTo(string $notifyTo)
    {
        $this->notifyTo = $notifyTo;
    }

    public function setNotifyToTemplate(string $notifyToTemplate)
    {
        $this->notifyToTemplate = $notifyToTemplate;
    }
}
