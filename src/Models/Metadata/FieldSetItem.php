<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:05 PM
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
