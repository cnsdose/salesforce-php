<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetRecordTypeVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $recordType
 * @property bool|null $visible
 */
class PermissionSetRecordTypeVisibility
{
    public static $classMap = [
    ];

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
