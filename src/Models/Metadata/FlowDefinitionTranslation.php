<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowDefinitionTranslation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowTranslation[]|null $flows
 * @property string|null $fullName
 * @property string|null $label
 */
class FlowDefinitionTranslation
{
    public static $classMap = [
        'flows' => [
            'multiple' => true,
            'type' => FlowTranslation::class,
        ],
    ];

    public function setFlows(array $flows)
    {
        $this->flows = $flows;
    }

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
