<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportBucketFieldSourceValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $from
 * @property string|null $sourceValue
 * @property string|null $to
 */
class ReportBucketFieldSourceValue
{
    public static $classMap = [
    ];

    public function setFrom(string $from)
    {
        $this->from = $from;
    }

    public function setSourceValue(string $sourceValue)
    {
        $this->sourceValue = $sourceValue;
    }

    public function setTo(string $to)
    {
        $this->to = $to;
    }
}
