<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowFlowAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $flow
 * @property WorkflowFlowActionParameter[]|null $flowInputs
 * @property string|null $label
 * @property string|null $language
 * @property bool|null $protected
 */
class WorkflowFlowAction extends WorkflowAction
{
    public static $classMap = [
        'flowInputs' => [
            'multiple' => true,
            'type' => WorkflowFlowActionParameter::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFlow(string $flow)
    {
        $this->flow = $flow;
    }

    public function setFlowInputs(array $flowInputs)
    {
        $this->flowInputs = $flowInputs;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    public function setProtected(bool $protected)
    {
        $this->protected = $protected;
    }
}
