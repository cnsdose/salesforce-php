<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $label
 * @property string[]|null $permissionSets
 * @property string|null $status
 */
class PermissionSetGroup extends Metadata
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPermissionSets(array $permissionSets)
    {
        $this->permissionSets = $permissionSets;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
