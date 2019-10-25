<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MutingPermissionSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 */
class MutingPermissionSet extends PermissionSet
{
    public static $classMap = [
    ];

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
