<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PackageTypeMembers
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $members
 * @property string|null $name
 */
class PackageTypeMembers
{
    public static $classMap = [
    ];

    public function setMembers(array $members)
    {
        $this->members = $members;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
