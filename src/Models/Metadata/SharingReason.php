<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharingReason
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $label
 */
class SharingReason extends Metadata
{
    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
