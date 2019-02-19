<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class deleteMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 * @property string[]|null $fullNames
 */
class deleteMetadata
{
    public static $classMap = [
    ];

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setFullNames(array $fullNames)
    {
        $this->fullNames = $fullNames;
    }
}
