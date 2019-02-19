<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowStep
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector[]|null $connectors
 */
class FlowStep extends FlowNode
{
    public static $classMap = [
        'connectors' => [
            'multiple' => true,
            'type' => FlowConnector::class,
        ],
    ];

    public function setConnectors(array $connectors)
    {
        $this->connectors = $connectors;
    }
}
