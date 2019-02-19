<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowDecision
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowConnector|null $defaultConnector
 * @property string|null $defaultConnectorLabel
 * @property FlowRule[]|null $rules
 */
class FlowDecision extends FlowNode
{
    public static $classMap = [
        'defaultConnector' => [
            'multiple' => false,
            'type' => FlowConnector::class,
        ],
        'rules' => [
            'multiple' => true,
            'type' => FlowRule::class,
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

    public function setRules(array $rules)
    {
        $this->rules = $rules;
    }
}
