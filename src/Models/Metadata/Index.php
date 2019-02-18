<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Index
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property IndexField[]|null $fields
 * @property string|null $label
 */
class Index extends Metadata
{
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
