<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FileProperties
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $createdById
 * @property string|null $createdByName
 * @property string|null $createdDate
 * @property string|null $fileName
 * @property string|null $fullName
 * @property string|null $id
 * @property string|null $lastModifiedById
 * @property string|null $lastModifiedByName
 * @property string|null $lastModifiedDate
 * @property string|null $manageableState
 * @property string|null $namespacePrefix
 * @property string|null $type
 */
class FileProperties
{
    public static $classMap = [
    ];

    public function setCreatedById(string $createdById)
    {
        $this->createdById = $createdById;
    }

    public function setCreatedByName(string $createdByName)
    {
        $this->createdByName = $createdByName;
    }

    public function setCreatedDate(string $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setLastModifiedById(string $lastModifiedById)
    {
        $this->lastModifiedById = $lastModifiedById;
    }

    public function setLastModifiedByName(string $lastModifiedByName)
    {
        $this->lastModifiedByName = $lastModifiedByName;
    }

    public function setLastModifiedDate(string $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public function setManageableState(ManageableState $manageableState)
    {
        $this->manageableState = $manageableState->getValue();
    }

    public function setNamespacePrefix(string $namespacePrefix)
    {
        $this->namespacePrefix = $namespacePrefix;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
