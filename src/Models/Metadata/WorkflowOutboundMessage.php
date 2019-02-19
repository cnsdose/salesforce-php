<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowOutboundMessage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property float|null $apiVersion
 * @property string|null $description
 * @property string|null $endpointUrl
 * @property string[]|null $fields
 * @property bool|null $includeSessionId
 * @property string|null $integrationUser
 * @property string|null $name
 * @property bool|null $protected
 * @property bool|null $useDeadLetterQueue
 */
class WorkflowOutboundMessage extends WorkflowAction
{
    public static $classMap = [
    ];

    public function setApiVersion(float $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEndpointUrl(string $endpointUrl)
    {
        $this->endpointUrl = $endpointUrl;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setIncludeSessionId(bool $includeSessionId)
    {
        $this->includeSessionId = $includeSessionId;
    }

    public function setIntegrationUser(string $integrationUser)
    {
        $this->integrationUser = $integrationUser;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }

    public function setUseDeadLetterQueue(bool $useDeadLetterQueue)
    {
        $this->useDeadLetterQueue = $useDeadLetterQueue;
    }
}
