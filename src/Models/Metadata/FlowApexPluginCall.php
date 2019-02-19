<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowApexPluginCall
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $apexClass
 * @property FlowConnector|null $connector
 * @property FlowConnector|null $faultConnector
 * @property FlowApexPluginCallInputParameter[]|null $inputParameters
 * @property FlowApexPluginCallOutputParameter[]|null $outputParameters
 */
class FlowApexPluginCall extends FlowNode
{
    public static $classMap = [
        'connector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'faultConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'inputParameters' => [
            'multiple' => true,
            'type' => FlowApexPluginCallInputParameter::class,
        ],
        'outputParameters' => [
            'multiple' => true,
            'type' => FlowApexPluginCallOutputParameter::class,
        ],
    ];

    public function setApexClass(string $apexClass)
    {
        $this->apexClass = $apexClass;
    }

    public function setConnector(FlowConnector $connector)
    {
        $this->connector = $connector;
    }

    public function setFaultConnector(FlowConnector $faultConnector)
    {
        $this->faultConnector = $faultConnector;
    }

    public function setInputParameters(array $inputParameters)
    {
        $this->inputParameters = $inputParameters;
    }

    public function setOutputParameters(array $outputParameters)
    {
        $this->outputParameters = $outputParameters;
    }
}
