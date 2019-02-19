<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ContentAssetLink
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $access
 * @property bool|null $isManagingWorkspace
 * @property string|null $name
 */
class ContentAssetLink
{
    public static $classMap = [
    ];

    public function setAccess(ContentAssetAccess $access)
    {
        $this->access = $access->getValue();
    }

    public function setIsManagingWorkspace(bool $isManagingWorkspace)
    {
        $this->isManagingWorkspace = $isManagingWorkspace;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
