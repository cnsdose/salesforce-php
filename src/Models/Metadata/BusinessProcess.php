<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BusinessProcess
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $isActive
 * @property PicklistValue[]|null $values
 */
class BusinessProcess extends Metadata
{
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}
