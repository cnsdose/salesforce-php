<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Workflow
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property WorkflowAlert[]|null $alerts
 * @property WorkflowFieldUpdate[]|null $fieldUpdates
 * @property WorkflowFlowAction[]|null $flowActions
 * @property WorkflowKnowledgePublish[]|null $knowledgePublishes
 * @property WorkflowOutboundMessage[]|null $outboundMessages
 * @property WorkflowRule[]|null $rules
 * @property WorkflowSend[]|null $send
 * @property WorkflowTask[]|null $tasks
 */
class Workflow extends Metadata
{
    public static $classMap = [
        'alerts' => [
            'multiple' => true,
            'type' => WorkflowAlert::class,
        ],
        'fieldUpdates' => [
            'multiple' => true,
            'type' => WorkflowFieldUpdate::class,
        ],
        'flowActions' => [
            'multiple' => true,
            'type' => WorkflowFlowAction::class,
        ],
        'knowledgePublishes' => [
            'multiple' => true,
            'type' => WorkflowKnowledgePublish::class,
        ],
        'outboundMessages' => [
            'multiple' => true,
            'type' => WorkflowOutboundMessage::class,
        ],
        'rules' => [
            'multiple' => true,
            'type' => WorkflowRule::class,
        ],
        'send' => [
            'multiple' => true,
            'type' => WorkflowSend::class,
        ],
        'tasks' => [
            'multiple' => true,
            'type' => WorkflowTask::class,
        ],
    ];

    public function setAlerts(array $alerts)
    {
        $this->alerts = $alerts;
    }

    public function setFieldUpdates(array $fieldUpdates)
    {
        $this->fieldUpdates = $fieldUpdates;
    }

    public function setFlowActions(array $flowActions)
    {
        $this->flowActions = $flowActions;
    }

    public function setKnowledgePublishes(array $knowledgePublishes)
    {
        $this->knowledgePublishes = $knowledgePublishes;
    }

    public function setOutboundMessages(array $outboundMessages)
    {
        $this->outboundMessages = $outboundMessages;
    }

    public function setRules(array $rules)
    {
        $this->rules = $rules;
    }

    public function setSend(array $send)
    {
        $this->send = $send;
    }

    public function setTasks(array $tasks)
    {
        $this->tasks = $tasks;
    }
}
