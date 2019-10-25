<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ServiceChannel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $interactionComponent
 * @property string|null $label
 * @property string|null $relatedEntityType
 * @property string|null $secondaryRoutingPriorityField
 * @property ServiceChannelFieldPriority[]|null $serviceChannelFieldPriorities
 */
class ServiceChannel extends Metadata
{
    public static $classMap = [
        'serviceChannelFieldPriorities' => [
            'multiple' => true,
            'type' => ServiceChannelFieldPriority::class,
        ],
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

    public function setSecondaryRoutingPriorityField(string $secondaryRoutingPriorityField)
    {
        $this->secondaryRoutingPriorityField = $secondaryRoutingPriorityField;
    }

    public function setServiceChannelFieldPriorities(array $serviceChannelFieldPriorities)
    {
        $this->serviceChannelFieldPriorities = $serviceChannelFieldPriorities;
    }
}
