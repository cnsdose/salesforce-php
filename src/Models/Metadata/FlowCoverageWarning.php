<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowCoverageWarning
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $flowId
 * @property string|null $flowName
 * @property string|null $flowNamespace
 * @property string|null $message
 */
class FlowCoverageWarning
{
    public static $classMap = [
    ];

    public function setFlowId(string $flowId)
    {
        $this->flowId = $flowId;
    }

    public function setFlowName(string $flowName)
    {
        $this->flowName = $flowName;
    }

    public function setFlowNamespace(string $flowNamespace)
    {
        $this->flowNamespace = $flowNamespace;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }
}
