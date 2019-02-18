<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property string|null $businessProcess
 * @property string|null $compactLayoutAssignment
 * @property string|null $description
 * @property string|null $label
 * @property RecordTypePicklistValue[]|null $picklistValues
 */
class RecordType extends Metadata
{
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
