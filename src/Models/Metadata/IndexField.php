<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IndexField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property string|null $sortDirection
 */
class IndexField
{
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSortDirection(string $sortDirection)
    {
        $this->sortDirection = $sortDirection;
    }
}
