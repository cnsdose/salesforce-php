<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ApprovalProcess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property bool|null $allowRecall
 * @property ApprovalSubmitter[]|null $allowedSubmitters
 * @property ApprovalPageField|null $approvalPageFields
 * @property ApprovalStep[]|null $approvalStep
 * @property string|null $description
 * @property string|null $emailTemplate
 * @property bool|null $enableMobileDeviceAccess
 * @property ApprovalEntryCriteria|null $entryCriteria
 * @property ApprovalAction|null $finalApprovalActions
 * @property bool|null $finalApprovalRecordLock
 * @property ApprovalAction|null $finalRejectionActions
 * @property bool|null $finalRejectionRecordLock
 * @property ApprovalAction|null $initialSubmissionActions
 * @property string|null $label
 * @property NextAutomatedApprover|null $nextAutomatedApprover
 * @property string|null $postTemplate
 * @property ApprovalAction|null $recallActions
 * @property string|null $recordEditability
 * @property bool|null $showApprovalHistory
 */
class ApprovalProcess extends Metadata
{
    public static $classMap = [
        'allowedSubmitters' => [
            'multiple' => true,
            'type' => ApprovalSubmitter::class,
        ],
        'approvalPageFields' => [
            'multiple' => false,
            'type' => ApprovalPageField::class,
        ],
        'approvalStep' => [
            'multiple' => true,
            'type' => ApprovalStep::class,
        ],
        'entryCriteria' => [
            'multiple' => false,
            'type' => ApprovalEntryCriteria::class,
        ],
        'finalApprovalActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
        'finalRejectionActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
        'initialSubmissionActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
        'nextAutomatedApprover' => [
            'multiple' => false,
            'type' => NextAutomatedApprover::class,
        ],
        'recallActions' => [
            'multiple' => false,
            'type' => ApprovalAction::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setAllowRecall(bool $allowRecall)
    {
        $this->allowRecall = $allowRecall;
    }

    public function setAllowedSubmitters(array $allowedSubmitters)
    {
        $this->allowedSubmitters = $allowedSubmitters;
    }

    public function setApprovalPageFields(ApprovalPageField $approvalPageFields)
    {
        $this->approvalPageFields = $approvalPageFields;
    }

    public function setApprovalStep(array $approvalStep)
    {
        $this->approvalStep = $approvalStep;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEmailTemplate(string $emailTemplate)
    {
        $this->emailTemplate = $emailTemplate;
    }

    public function setEnableMobileDeviceAccess(bool $enableMobileDeviceAccess)
    {
        $this->enableMobileDeviceAccess = $enableMobileDeviceAccess;
    }

    public function setEntryCriteria(ApprovalEntryCriteria $entryCriteria)
    {
        $this->entryCriteria = $entryCriteria;
    }

    public function setFinalApprovalActions(ApprovalAction $finalApprovalActions)
    {
        $this->finalApprovalActions = $finalApprovalActions;
    }

    public function setFinalApprovalRecordLock(bool $finalApprovalRecordLock)
    {
        $this->finalApprovalRecordLock = $finalApprovalRecordLock;
    }

    public function setFinalRejectionActions(ApprovalAction $finalRejectionActions)
    {
        $this->finalRejectionActions = $finalRejectionActions;
    }

    public function setFinalRejectionRecordLock(bool $finalRejectionRecordLock)
    {
        $this->finalRejectionRecordLock = $finalRejectionRecordLock;
    }

    public function setInitialSubmissionActions(ApprovalAction $initialSubmissionActions)
    {
        $this->initialSubmissionActions = $initialSubmissionActions;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setNextAutomatedApprover(NextAutomatedApprover $nextAutomatedApprover)
    {
        $this->nextAutomatedApprover = $nextAutomatedApprover;
    }

    public function setPostTemplate(string $postTemplate)
    {
        $this->postTemplate = $postTemplate;
    }

    public function setRecallActions(ApprovalAction $recallActions)
    {
        $this->recallActions = $recallActions;
    }

    public function setRecordEditability(RecordEditabilityType $recordEditability)
    {
        $this->recordEditability = $recordEditability->getValue();
    }

    public function setShowApprovalHistory(bool $showApprovalHistory)
    {
        $this->showApprovalHistory = $showApprovalHistory;
    }
}
