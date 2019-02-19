<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accountAccessLevel
 * @property string|null $parentTerritory
 */
class Territory extends RoleOrTerritory
{
    public static $classMap = [
    ];

    public function setAccountAccessLevel(string $accountAccessLevel)
    {
        $this->accountAccessLevel = $accountAccessLevel;
    }

    public function setParentTerritory(string $parentTerritory)
    {
        $this->parentTerritory = $parentTerritory;
    }
}
