<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WorkflowTaskTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $name
 * @property string|null $subject
 */
class WorkflowTaskTranslation
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
}
