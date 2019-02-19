<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EmailToCaseRoutingAddress
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $addressType
 * @property string|null $authorizedSenders
 * @property string|null $caseOrigin
 * @property string|null $caseOwner
 * @property string|null $caseOwnerType
 * @property string|null $casePriority
 * @property bool|null $createTask
 * @property string|null $emailAddress
 * @property string|null $emailServicesAddress
 * @property bool|null $isVerified
 * @property string|null $routingName
 * @property bool|null $saveEmailHeaders
 * @property string|null $taskStatus
 */
class EmailToCaseRoutingAddress
{
    public static $classMap = [
    ];

    public function setAddressType(EmailToCaseRoutingAddressType $addressType)
    {
        $this->addressType = $addressType->getValue();
    }

    public function setAuthorizedSenders(string $authorizedSenders)
    {
        $this->authorizedSenders = $authorizedSenders;
    }

    public function setCaseOrigin(string $caseOrigin)
    {
        $this->caseOrigin = $caseOrigin;
    }

    public function setCaseOwner(string $caseOwner)
    {
        $this->caseOwner = $caseOwner;
    }

    public function setCaseOwnerType(string $caseOwnerType)
    {
        $this->caseOwnerType = $caseOwnerType;
    }

    public function setCasePriority(string $casePriority)
    {
        $this->casePriority = $casePriority;
    }

    public function setCreateTask(bool $createTask)
    {
        $this->createTask = $createTask;
    }

    public function setEmailAddress(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function setEmailServicesAddress(string $emailServicesAddress)
    {
        $this->emailServicesAddress = $emailServicesAddress;
    }

    public function setIsVerified(bool $isVerified)
    {
        $this->isVerified = $isVerified;
    }

    public function setRoutingName(string $routingName)
    {
        $this->routingName = $routingName;
    }

    public function setSaveEmailHeaders(bool $saveEmailHeaders)
    {
        $this->saveEmailHeaders = $saveEmailHeaders;
    }

    public function setTaskStatus(string $taskStatus)
    {
        $this->taskStatus = $taskStatus;
    }
}
