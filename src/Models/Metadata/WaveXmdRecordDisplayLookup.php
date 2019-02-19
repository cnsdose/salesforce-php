<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdRecordDisplayLookup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $recordDisplayField
 */
class WaveXmdRecordDisplayLookup
{
    public static $classMap = [
    ];

    public function setRecordDisplayField(string $recordDisplayField)
    {
        $this->recordDisplayField = $recordDisplayField;
    }
}
