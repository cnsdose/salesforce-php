<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DeleteMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 * @property string[]|null $fullNames
 */
class DeleteMetadata
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
