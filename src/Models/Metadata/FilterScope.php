<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FilterScope extends Enum
{
    const EVERYTHING = 'Everything';
    const MINE = 'Mine';
    const QUEUE = 'Queue';
    const DELEGATED = 'Delegated';
    const MY_TERRITORY = 'MyTerritory';
    const MY_TEAM_TERRITORY = 'MyTeamTerritory';
    const TEAM = 'Team';
    const ASSIGNED_TO_ME = 'AssignedToMe';
    const MINE_AND_MY_GROUPS = 'MineAndMyGroups';
}
