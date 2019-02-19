<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileLayoutAssignment
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $layout
 * @property string|null $recordType
 */
class ProfileLayoutAssignment
{
    public static $classMap = [
    ];

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
    }

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }
}
