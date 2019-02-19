<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ServiceChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $interactionComponent
 * @property string|null $label
 * @property string|null $relatedEntityType
 */
class ServiceChannel extends Metadata
{
    public static $classMap = [
    ];

    public function setInteractionComponent(string $interactionComponent)
    {
        $this->interactionComponent = $interactionComponent;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setRelatedEntityType(string $relatedEntityType)
    {
        $this->relatedEntityType = $relatedEntityType;
    }
}
