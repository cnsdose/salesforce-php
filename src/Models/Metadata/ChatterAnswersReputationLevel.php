<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterAnswersReputationLevel
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property int|null $value
 */
class ChatterAnswersReputationLevel
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }
}
