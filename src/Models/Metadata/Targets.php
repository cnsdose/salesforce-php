<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Targets
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $target
 */
class Targets
{
    public static $classMap = [
    ];

    public function setTarget(array $target)
    {
        $this->target = $target;
    }
}
