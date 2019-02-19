<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowTask
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignedTo
 * @property string|null $assignedToType
 * @property string|null $description
 * @property int|null $dueDateOffset
 * @property bool|null $notifyAssignee
 * @property string|null $offsetFromField
 * @property string|null $priority
 * @property bool|null $protected
 * @property string|null $status
 * @property string|null $subject
 */
class WorkflowTask extends WorkflowAction
{
    public static $classMap = [
    ];

    public function setAssignedTo(string $assignedTo)
    {
        $this->assignedTo = $assignedTo;
    }

    public function setAssignedToType(ActionTaskAssignedToTypes $assignedToType)
    {
        $this->assignedToType = $assignedToType->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDueDateOffset(int $dueDateOffset)
    {
        $this->dueDateOffset = $dueDateOffset;
    }

    public function setNotifyAssignee(bool $notifyAssignee)
    {
        $this->notifyAssignee = $notifyAssignee;
    }

    public function setOffsetFromField(string $offsetFromField)
    {
        $this->offsetFromField = $offsetFromField;
    }

    public function setPriority(string $priority)
    {
        $this->priority = $priority;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
}
