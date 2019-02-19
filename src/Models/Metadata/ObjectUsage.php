<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ObjectUsage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $object
 */
class ObjectUsage
{
    public static $classMap = [
    ];

    public function setObject(array $object)
    {
        $this->object = $object;
    }
}
