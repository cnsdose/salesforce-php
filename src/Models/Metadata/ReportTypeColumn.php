<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportTypeColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $checkedByDefault
 * @property string|null $displayNameOverride
 * @property string|null $field
 * @property string|null $table
 */
class ReportTypeColumn
{
    public static $classMap = [
    ];

    public function setCheckedByDefault(bool $checkedByDefault)
    {
        $this->checkedByDefault = $checkedByDefault;
    }

    public function setDisplayNameOverride(string $displayNameOverride)
    {
        $this->displayNameOverride = $displayNameOverride;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setTable(string $table)
    {
        $this->table = $table;
    }
}
