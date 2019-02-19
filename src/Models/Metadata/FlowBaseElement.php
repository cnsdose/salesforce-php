<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowBaseElement
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property FlowMetadataValue[]|null $processMetadataValues
 */
class FlowBaseElement
{
    public static $classMap = [
        'processMetadataValues' => [
            'multiple' => true,
            'type' => FlowMetadataValue::class,
        ],
    ];

    public function setProcessMetadataValues(array $processMetadataValues)
    {
        $this->processMetadataValues = $processMetadataValues;
    }
}
