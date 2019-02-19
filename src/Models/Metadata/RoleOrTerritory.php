<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RoleOrTerritory
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $caseAccessLevel
 * @property string|null $contactAccessLevel
 * @property string|null $description
 * @property bool|null $mayForecastManagerShare
 * @property string|null $name
 * @property string|null $opportunityAccessLevel
 */
class RoleOrTerritory extends Metadata
{
    public static $classMap = [
    ];

    public function setCaseAccessLevel(string $caseAccessLevel)
    {
        $this->caseAccessLevel = $caseAccessLevel;
    }

    public function setContactAccessLevel(string $contactAccessLevel)
    {
        $this->contactAccessLevel = $contactAccessLevel;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setMayForecastManagerShare(bool $mayForecastManagerShare)
    {
        $this->mayForecastManagerShare = $mayForecastManagerShare;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setOpportunityAccessLevel(string $opportunityAccessLevel)
    {
        $this->opportunityAccessLevel = $opportunityAccessLevel;
    }
}
