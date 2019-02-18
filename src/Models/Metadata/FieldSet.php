<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:07 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldSet
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property FieldSetItem[]|null $availableFields
 * @property string|null $description
 * @property FieldSetItem[]|null $displayedFields
 * @property string|null $label
 */
class FieldSet
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setAvailableFields(array $availableFields)
    {
        $this->availableFields = $availableFields;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setDisplayedFields(array $displayedFields)
    {
        $this->displayedFields = $displayedFields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
