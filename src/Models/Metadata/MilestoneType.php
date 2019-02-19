<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MilestoneType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property string|null $recurrenceType
 */
class MilestoneType extends Metadata
{
    public static $classMap = [
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setRecurrenceType(MilestoneTypeRecurrenceType $recurrenceType)
    {
        $this->recurrenceType = $recurrenceType->getValue();
    }
}
