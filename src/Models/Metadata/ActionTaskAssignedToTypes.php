<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionTaskAssignedToTypes extends Enum
{
    const USER = 'user';
    const ROLE = 'role';
    const OPPORTUNITY_TEAM = 'opportunityTeam';
    const ACCOUNT_TEAM = 'accountTeam';
    const OWNER = 'owner';
    const ACCOUNT_OWNER = 'accountOwner';
    const CREATOR = 'creator';
    const ACCOUNT_CREATOR = 'accountCreator';
    const PARTNER_USER = 'partnerUser';
    const PORTAL_ROLE = 'portalRole';
}
