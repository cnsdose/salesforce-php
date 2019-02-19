<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FolderShare
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessLevel
 * @property string|null $sharedTo
 * @property string|null $sharedToType
 */
class FolderShare
{
    public static $classMap = [
    ];

    public function setAccessLevel(FolderShareAccessLevel $accessLevel)
    {
        $this->accessLevel = $accessLevel->getValue();
    }

    public function setSharedTo(string $sharedTo)
    {
        $this->sharedTo = $sharedTo;
    }

    public function setSharedToType(FolderSharedToType $sharedToType)
    {
        $this->sharedToType = $sharedToType->getValue();
    }
}
