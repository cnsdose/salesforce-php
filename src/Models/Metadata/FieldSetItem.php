<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldSetItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property bool|null $isFieldManaged
 * @property bool|null $isRequired
 */
class FieldSetItem
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setIsFieldManaged(bool $isFieldManaged)
    {
        $this->isFieldManaged = $isFieldManaged;
    }

    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }
}
