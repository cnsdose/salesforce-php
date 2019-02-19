<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileObjectPermissions
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowCreate
 * @property bool|null $allowDelete
 * @property bool|null $allowEdit
 * @property bool|null $allowRead
 * @property bool|null $modifyAllRecords
 * @property string|null $object
 * @property bool|null $viewAllRecords
 */
class ProfileObjectPermissions
{
    public static $classMap = [
    ];

    public function setAllowCreate(bool $allowCreate)
    {
        $this->allowCreate = $allowCreate;
    }

    public function setAllowDelete(bool $allowDelete)
    {
        $this->allowDelete = $allowDelete;
    }

    public function setAllowEdit(bool $allowEdit)
    {
        $this->allowEdit = $allowEdit;
    }

    public function setAllowRead(bool $allowRead)
    {
        $this->allowRead = $allowRead;
    }

    public function setModifyAllRecords(bool $modifyAllRecords)
    {
        $this->modifyAllRecords = $modifyAllRecords;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }

    public function setViewAllRecords(bool $viewAllRecords)
    {
        $this->viewAllRecords = $viewAllRecords;
    }
}
