<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:27 PM
 */

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
