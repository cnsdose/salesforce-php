<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SessionHeader
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $sessionId
 */
class SessionHeader
{
    public static $classMap = [
    ];

    public function setSessionId(string $sessionId)
    {
        $this->sessionId = $sessionId;
    }
}
