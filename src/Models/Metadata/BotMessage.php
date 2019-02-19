<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotMessage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $message
 */
class BotMessage
{
    public static $classMap = [
    ];

    public function setMessage(string $message)
    {
        $this->message = $message;
    }
}
