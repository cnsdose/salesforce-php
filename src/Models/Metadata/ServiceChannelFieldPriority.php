<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ServiceChannelFieldPriority
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $priority
 * @property string|null $value
 */
class ServiceChannelFieldPriority
{
    public static $classMap = [
    ];

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
