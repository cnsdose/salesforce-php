<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChannelLayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 */
class ChannelLayoutItem
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }
}
