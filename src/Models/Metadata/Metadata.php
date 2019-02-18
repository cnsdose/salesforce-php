<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Metadata
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $fullName
 */
class Metadata extends \CNSDose\Salesforce\Models\BaseMetadataModel
{
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }
}
