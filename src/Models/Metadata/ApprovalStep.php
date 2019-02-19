<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalStep
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowDelegate
 * @property ApprovalAction|null $approvalActions
 * @property ApprovalStepApprover|null $assignedApprover
 * @property string|null $description
 * @property ApprovalEntryCriteria|null $entryCriteria
 * @property string|null $ifCriteriaNotMet
 * @property string|null $label
 * @property string|null $name
 * @property ApprovalStepRejectBehavior|null $rejectBehavior
 * @property ApprovalAction|null $rejectionActions
 */
class ApprovalStep
{
    public static $classMap = [
        'approvalActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
        'assignedApprover' => [
            'multiple' => false,
            'type' => ApprovalStepApprover::class,
        ],
        'entryCriteria' => [
            'multiple' => false,
            'type' => ApprovalEntryCriteria::class,
        ],
        'rejectBehavior' => [
            'multiple' => false,
            'type' => ApprovalStepRejectBehavior::class,
        ],
        'rejectionActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
    ];

    public function setAllowDelegate(bool $allowDelegate)
    {
        $this->allowDelegate = $allowDelegate;
    }

    public function setApprovalActions(ApprovalAction $approvalActions)
    {
        $this->approvalActions = $approvalActions;
    }

    public function setAssignedApprover(ApprovalStepApprover $assignedApprover)
    {
        $this->assignedApprover = $assignedApprover;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEntryCriteria(ApprovalEntryCriteria $entryCriteria)
    {
        $this->entryCriteria = $entryCriteria;
    }

    public function setIfCriteriaNotMet(StepCriteriaNotMetType $ifCriteriaNotMet)
    {
        $this->ifCriteriaNotMet = $ifCriteriaNotMet->getValue();
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setRejectBehavior(ApprovalStepRejectBehavior $rejectBehavior)
    {
        $this->rejectBehavior = $rejectBehavior;
    }

    public function setRejectionActions(ApprovalAction $rejectionActions)
    {
        $this->rejectionActions = $rejectionActions;
    }
}
