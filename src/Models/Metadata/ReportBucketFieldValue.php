<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportBucketFieldValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportBucketFieldSourceValue[]|null $sourceValues
 * @property string|null $value
 */
class ReportBucketFieldValue
{
    public static $classMap = [
        'sourceValues' => [
            'multiple' => true,
            'type' => ReportBucketFieldSourceValue::class,
        ],
    ];

    public function setSourceValues(array $sourceValues)
    {
        $this->sourceValues = $sourceValues;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
