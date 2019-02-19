<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileRecordTypeVisibility
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $default
 * @property bool|null $personAccountDefault
 * @property string|null $recordType
 * @property bool|null $visible
 */
class ProfileRecordTypeVisibility
{
    public static $classMap = [
    ];

    public function setDefault(bool $default)
    {
        $this->default = $default;
    }

    public function setPersonAccountDefault(bool $personAccountDefault)
    {
        $this->personAccountDefault = $personAccountDefault;
    }

    public function setRecordType(string $recordType)
    {
        $this->recordType = $recordType;
    }

    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
    }
}
