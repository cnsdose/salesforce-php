<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowWait
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $defaultConnector
 * @property string|null $defaultConnectorLabel
 * @property FlowConnector|null $faultConnector
 * @property FlowWaitEvent[]|null $waitEvents
 */
class FlowWait extends FlowNode
{
    public static $classMap = [
        'defaultConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'faultConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'waitEvents' => [
            'multiple' => true,
            'type' => FlowWaitEvent::class,
        ],
    ];

    public function setDefaultConnector(FlowConnector $defaultConnector)
    {
        $this->defaultConnector = $defaultConnector;
    }

    public function setDefaultConnectorLabel(string $defaultConnectorLabel)
    {
        $this->defaultConnectorLabel = $defaultConnectorLabel;
    }

    public function setFaultConnector(FlowConnector $faultConnector)
    {
        $this->faultConnector = $faultConnector;
    }

    public function setWaitEvents(array $waitEvents)
    {
        $this->waitEvents = $waitEvents;
    }
}
