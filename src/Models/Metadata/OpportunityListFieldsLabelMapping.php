<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OpportunityListFieldsLabelMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $label
 */
class OpportunityListFieldsLabelMapping
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
