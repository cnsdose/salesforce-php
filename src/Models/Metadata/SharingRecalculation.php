<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingRecalculation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $className
 */
class SharingRecalculation
{
    public static $classMap = [
    ];

    public function setClassName(string $className)
    {
        $this->className = $className;
    }
}
