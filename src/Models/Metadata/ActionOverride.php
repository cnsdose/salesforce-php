<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionName
 * @property string|null $comment
 * @property string|null $content
 * @property string|null $formFactor
 * @property bool|null $skipRecordTypeSelect
 * @property string|null $type
 */
class ActionOverride
{
    public function setActionName(string $actionName)
    {
        $this->actionName = $actionName;
    }

    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setFormFactor(FormFactor $formFactor)
    {
        $this->formFactor = $formFactor->getValue();
    }

    public function setSkipRecordTypeSelect(bool $skipRecordTypeSelect)
    {
        $this->skipRecordTypeSelect = $skipRecordTypeSelect;
    }

    public function setType(ActionOverrideType $type)
    {
        $this->type = $type->getValue();
    }
}
