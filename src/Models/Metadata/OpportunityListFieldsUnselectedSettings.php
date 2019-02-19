<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OpportunityListFieldsUnselectedSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $field
 */
class OpportunityListFieldsUnselectedSettings
{
    public static $classMap = [
    ];

    public function setField(array $field)
    {
        $this->field = $field;
    }
}
