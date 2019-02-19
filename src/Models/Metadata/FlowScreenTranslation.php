<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowScreenTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowScreenFieldTranslation[]|null $fields
 * @property string|null $helpText
 * @property string|null $name
 * @property string|null $pausedText
 */
class FlowScreenTranslation
{
    public static $classMap = [
        'fields' => [
            'multiple' => true,
            'type' => FlowScreenFieldTranslation::class,
        ],
    ];

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setHelpText(string $helpText)
    {
        $this->helpText = $helpText;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPausedText(string $pausedText)
    {
        $this->pausedText = $pausedText;
    }
}
