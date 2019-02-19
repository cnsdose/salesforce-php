<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrchestrationContext
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property OrchestrationContextDataset[]|null $datasets
 * @property string|null $description
 * @property OrchestrationContextEvent[]|null $events
 * @property string|null $imageFile
 * @property int|null $imageScale
 * @property string|null $masterLabel
 * @property string|null $runtimeType
 * @property string|null $salesforceObject
 * @property string|null $salesforceObjectPrimaryKey
 */
class OrchestrationContext extends Metadata
{
    public static $classMap = [
        'datasets' => [
            'multiple' => true,
            'type' => OrchestrationContextDataset::class,
        ],
        'events' => [
            'multiple' => true,
            'type' => OrchestrationContextEvent::class,
        ],
    ];

    public function setDatasets(array $datasets)
    {
        $this->datasets = $datasets;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEvents(array $events)
    {
        $this->events = $events;
    }

    public function setImageFile(string $imageFile)
    {
        $this->imageFile = $imageFile;
    }

    public function setImageScale(int $imageScale)
    {
        $this->imageScale = $imageScale;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setRuntimeType(string $runtimeType)
    {
        $this->runtimeType = $runtimeType;
    }

    public function setSalesforceObject(string $salesforceObject)
    {
        $this->salesforceObject = $salesforceObject;
    }

    public function setSalesforceObjectPrimaryKey(string $salesforceObjectPrimaryKey)
    {
        $this->salesforceObjectPrimaryKey = $salesforceObjectPrimaryKey;
    }
}
