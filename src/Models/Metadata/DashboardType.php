<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DashboardType extends Enum
{
    const SPECIFIED_USER = 'SpecifiedUser';
    const LOGGED_IN_USER = 'LoggedInUser';
    const MY_TEAM_USER = 'MyTeamUser';
}
