<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Group
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesIncludeBosses
 * @property string|null $name
 */
class Group extends Metadata
{
    public static $classMap = [
    ];

    public function setDoesIncludeBosses(bool $doesIncludeBosses)
    {
        $this->doesIncludeBosses = $doesIncludeBosses;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
