<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DebuggingInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $debugLog
 */
class DebuggingInfo
{
    public static $classMap = [
    ];

    public function setDebugLog(string $debugLog)
    {
        $this->debugLog = $debugLog;
    }
}
