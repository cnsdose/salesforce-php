<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdOrganization
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $instanceUrl
 * @property string|null $label
 * @property string|null $organizationIdentifier
 * @property int|null $sortIndex
 */
class WaveXmdOrganization
{
    public static $classMap = [
    ];

    public function setInstanceUrl(string $instanceUrl)
    {
        $this->instanceUrl = $instanceUrl;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setOrganizationIdentifier(string $organizationIdentifier)
    {
        $this->organizationIdentifier = $organizationIdentifier;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
}
