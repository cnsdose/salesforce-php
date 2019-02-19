<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowLoop
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assignNextValueToReference
 * @property string|null $collectionReference
 * @property string|null $iterationOrder
 * @property FlowConnector|null $nextValueConnector
 * @property FlowConnector|null $noMoreValuesConnector
 */
class FlowLoop extends FlowNode
{
    public static $classMap = [
        'nextValueConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'noMoreValuesConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
    ];

    public function setAssignNextValueToReference(string $assignNextValueToReference)
    {
        $this->assignNextValueToReference = $assignNextValueToReference;
    }

    public function setCollectionReference(string $collectionReference)
    {
        $this->collectionReference = $collectionReference;
    }

    public function setIterationOrder(IterationOrder $iterationOrder)
    {
        $this->iterationOrder = $iterationOrder->getValue();
    }

    public function setNextValueConnector(FlowConnector $nextValueConnector)
    {
        $this->nextValueConnector = $nextValueConnector;
    }

    public function setNoMoreValuesConnector(FlowConnector $noMoreValuesConnector)
    {
        $this->noMoreValuesConnector = $noMoreValuesConnector;
    }
}
