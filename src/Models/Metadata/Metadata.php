<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Metadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 */
class Metadata
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }
}
