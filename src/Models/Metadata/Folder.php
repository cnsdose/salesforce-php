<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Folder
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessType
 * @property FolderShare[]|null $folderShares
 * @property string|null $name
 * @property string|null $publicFolderAccess
 * @property SharedTo|null $sharedTo
 */
class Folder extends Metadata
{
    public static $classMap = [
        'folderShares' => [
            'multiple' => true,
            'type' => FolderShare::class,
        ],
        'sharedTo' => [
            'multiple' => false,
            'type' => SharedTo::class,
        ],
    ];

    public function setAccessType(FolderAccessTypes $accessType)
    {
        $this->accessType = $accessType->getValue();
    }

    public function setFolderShares(array $folderShares)
    {
        $this->folderShares = $folderShares;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPublicFolderAccess(PublicFolderAccess $publicFolderAccess)
    {
        $this->publicFolderAccess = $publicFolderAccess->getValue();
    }

    public function setSharedTo(SharedTo $sharedTo)
    {
        $this->sharedTo = $sharedTo;
    }
}
