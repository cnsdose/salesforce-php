<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PresenceDeclineReason
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 */
class PresenceDeclineReason extends Metadata
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
