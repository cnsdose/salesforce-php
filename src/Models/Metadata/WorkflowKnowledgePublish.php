<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowKnowledgePublish
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property string|null $description
 * @property string|null $label
 * @property string|null $language
 * @property bool|null $protected
 */
class WorkflowKnowledgePublish extends WorkflowAction
{
    public static $classMap = [
    ];

    public function setAction(KnowledgeWorkflowAction $action)
    {
        $this->action = $action->getValue();
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
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
