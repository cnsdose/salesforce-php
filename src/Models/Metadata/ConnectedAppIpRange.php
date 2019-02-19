<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppIpRange
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $end
 * @property string|null $start
 */
class ConnectedAppIpRange
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setEnd(string $end)
    {
        $this->end = $end;
    }

    public function setStart(string $start)
    {
        $this->start = $start;
    }
}
