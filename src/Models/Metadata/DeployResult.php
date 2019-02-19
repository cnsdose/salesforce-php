<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeployResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $canceledBy
 * @property string|null $canceledByName
 * @property bool|null $checkOnly
 * @property string|null $completedDate
 * @property string|null $createdBy
 * @property string|null $createdByName
 * @property string|null $createdDate
 * @property DeployDetails|null $details
 * @property bool|null $done
 * @property string|null $errorMessage
 * @property string|null $errorStatusCode
 * @property ID|null $id
 * @property bool|null $ignoreWarnings
 * @property string|null $lastModifiedDate
 * @property int|null $numberComponentErrors
 * @property int|null $numberComponentsDeployed
 * @property int|null $numberComponentsTotal
 * @property int|null $numberTestErrors
 * @property int|null $numberTestsCompleted
 * @property int|null $numberTestsTotal
 * @property bool|null $rollbackOnError
 * @property bool|null $runTestsEnabled
 * @property string|null $startDate
 * @property string|null $stateDetail
 * @property string|null $status
 * @property bool|null $success
 */
class DeployResult
{
    public static $classMap = [
        'details' => [
            'multiple' => false,
            'type' => DeployDetails::class,
        ],
    ];

    public function setCanceledBy(string $canceledBy)
    {
        $this->canceledBy = $canceledBy;
    }

    public function setCanceledByName(string $canceledByName)
    {
        $this->canceledByName = $canceledByName;
    }

    public function setCheckOnly(bool $checkOnly)
    {
        $this->checkOnly = $checkOnly;
    }

    public function setCompletedDate(string $completedDate)
    {
        $this->completedDate = $completedDate;
    }

    public function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    public function setCreatedByName(string $createdByName)
    {
        $this->createdByName = $createdByName;
    }

    public function setCreatedDate(string $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function setDetails(DeployDetails $details)
    {
        $this->details = $details;
    }

    public function setDone(bool $done)
    {
        $this->done = $done;
    }

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setErrorStatusCode(StatusCode $errorStatusCode)
    {
        $this->errorStatusCode = $errorStatusCode->getValue();
    }

    public function setId(ID $id)
    {
        $this->id = $id;
    }

    public function setIgnoreWarnings(bool $ignoreWarnings)
    {
        $this->ignoreWarnings = $ignoreWarnings;
    }

    public function setLastModifiedDate(string $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public function setNumberComponentErrors(int $numberComponentErrors)
    {
        $this->numberComponentErrors = $numberComponentErrors;
    }

    public function setNumberComponentsDeployed(int $numberComponentsDeployed)
    {
        $this->numberComponentsDeployed = $numberComponentsDeployed;
    }

    public function setNumberComponentsTotal(int $numberComponentsTotal)
    {
        $this->numberComponentsTotal = $numberComponentsTotal;
    }

    public function setNumberTestErrors(int $numberTestErrors)
    {
        $this->numberTestErrors = $numberTestErrors;
    }

    public function setNumberTestsCompleted(int $numberTestsCompleted)
    {
        $this->numberTestsCompleted = $numberTestsCompleted;
    }

    public function setNumberTestsTotal(int $numberTestsTotal)
    {
        $this->numberTestsTotal = $numberTestsTotal;
    }

    public function setRollbackOnError(bool $rollbackOnError)
    {
        $this->rollbackOnError = $rollbackOnError;
    }

    public function setRunTestsEnabled(bool $runTestsEnabled)
    {
        $this->runTestsEnabled = $runTestsEnabled;
    }

    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
    }

    public function setStateDetail(string $stateDetail)
    {
        $this->stateDetail = $stateDetail;
    }

    public function setStatus(DeployStatus $status)
    {
        $this->status = $status->getValue();
    }

    public function setSuccess(bool $success)
    {
        $this->success = $success;
    }
}
