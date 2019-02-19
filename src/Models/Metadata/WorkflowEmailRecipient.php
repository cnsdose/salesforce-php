<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowEmailRecipient
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $recipient
 * @property string|null $type
 */
class WorkflowEmailRecipient
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setRecipient(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function setType(ActionEmailRecipientTypes $type)
    {
        $this->type = $type->getValue();
    }
}
