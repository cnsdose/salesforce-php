<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ListMetadataQuery
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $folder
 * @property string|null $type
 */
class ListMetadataQuery
{
    public static $classMap = [
    ];

    public function setFolder(string $folder)
    {
        $this->folder = $folder;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
