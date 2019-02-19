<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class TransactionSecurityPolicy
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property TransactionSecurityAction|null $action
 * @property bool|null $active
 * @property string|null $apexClass
 * @property string|null $description
 * @property string|null $developerName
 * @property string|null $eventName
 * @property string|null $eventType
 * @property string|null $executionUser
 * @property string|null $flow
 * @property string|null $masterLabel
 * @property string|null $resourceName
 * @property string|null $type
 */
class TransactionSecurityPolicy extends Metadata
{
    public static $classMap = [
        'action' => [
            'multiple' => false,
            'type' => TransactionSecurityAction::class,
        ],
    ];

    public function setAction(TransactionSecurityAction $action)
    {
        $this->action = $action;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setApexClass(string $apexClass)
    {
        $this->apexClass = $apexClass;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setEventName(TransactionSecurityEventName $eventName)
    {
        $this->eventName = $eventName->getValue();
    }

    public function setEventType(MonitoredEvents $eventType)
    {
        $this->eventType = $eventType->getValue();
    }

    public function setExecutionUser(string $executionUser)
    {
        $this->executionUser = $executionUser;
    }

    public function setFlow(string $flow)
    {
        $this->flow = $flow;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setResourceName(string $resourceName)
    {
        $this->resourceName = $resourceName;
    }

    public function setType(TxnSecurityPolicyType $type)
    {
        $this->type = $type->getValue();
    }
}
