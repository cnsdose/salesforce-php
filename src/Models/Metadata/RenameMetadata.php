<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RenameMetadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 * @property string|null $oldFullName
 * @property string|null $newFullName
 */
class RenameMetadata
{
    public static $classMap = [
    ];

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setOldFullName(string $oldFullName)
    {
        $this->oldFullName = $oldFullName;
    }

    public function setNewFullName(string $newFullName)
    {
        $this->newFullName = $newFullName;
    }
}
