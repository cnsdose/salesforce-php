<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:01 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 * @property bool|null $active
 * @property string|null $businessProcess
 * @property string|null $compactLayoutAssignment
 * @property string|null $description
 * @property string|null $label
 * @property RecordTypePicklistValue[]|null $picklistValues
 */
class RecordType
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setBusinessProcess(string $businessProcess)
    {
        $this->businessProcess = $businessProcess;
    }

    public function setCompactLayoutAssignment(string $compactLayoutAssignment)
    {
        $this->compactLayoutAssignment = $compactLayoutAssignment;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setPicklistValues(array $picklistValues)
    {
        $this->picklistValues = $picklistValues;
    }
}
