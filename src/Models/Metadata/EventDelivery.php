<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EventDelivery
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property EventParameterMap[]|null $eventParameters
 * @property string|null $eventSubscription
 * @property string|null $referenceData
 * @property string|null $type
 */
class EventDelivery extends Metadata
{
    public static $classMap = [
        'eventParameters' => [
            'multiple' => true,
            'type' => EventParameterMap::class,
        ],
    ];

    public function setEventParameters(array $eventParameters)
    {
        $this->eventParameters = $eventParameters;
    }

    public function setEventSubscription(string $eventSubscription)
    {
        $this->eventSubscription = $eventSubscription;
    }

    public function setReferenceData(string $referenceData)
    {
        $this->referenceData = $referenceData;
    }

    public function setType(EventDeliveryType $type)
    {
        $this->type = $type->getValue();
    }
}
