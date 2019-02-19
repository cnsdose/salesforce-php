<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowCoverageResult
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $elementsNotCovered
 * @property string|null $flowId
 * @property string|null $flowName
 * @property string|null $flowNamespace
 * @property int|null $numElements
 * @property int|null $numElementsNotCovered
 * @property string|null $processType
 */
class FlowCoverageResult
{
    public static $classMap = [
    ];

    public function setElementsNotCovered(array $elementsNotCovered)
    {
        $this->elementsNotCovered = $elementsNotCovered;
    }

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

    public function setNumElements(int $numElements)
    {
        $this->numElements = $numElements;
    }

    public function setNumElementsNotCovered(int $numElementsNotCovered)
    {
        $this->numElementsNotCovered = $numElementsNotCovered;
    }

    public function setProcessType(FlowProcessType $processType)
    {
        $this->processType = $processType->getValue();
    }
}
