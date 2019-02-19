<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionEmailRecipientTypes extends Enum
{
    const GROUP = 'group';
    const ROLE = 'role';
    const USER = 'user';
    const OPPORTUNITY_TEAM = 'opportunityTeam';
    const ACCOUNT_TEAM = 'accountTeam';
    const ROLE_SUBORDINATES = 'roleSubordinates';
    const OWNER = 'owner';
    const CREATOR = 'creator';
    const PARTNER_USER = 'partnerUser';
    const ACCOUNT_OWNER = 'accountOwner';
    const CUSTOMER_PORTAL_USER = 'customerPortalUser';
    const PORTAL_ROLE = 'portalRole';
    const PORTAL_ROLE_SUBORDINATES = 'portalRoleSubordinates';
    const CONTACT_LOOKUP = 'contactLookup';
    const USER_LOOKUP = 'userLookup';
    const ROLE_SUBORDINATES_INTERNAL = 'roleSubordinatesInternal';
    const EMAIL = 'email';
    const CASE_TEAM = 'caseTeam';
    const CAMPAIGN_MEMBER_DERIVED_OWNER = 'campaignMemberDerivedOwner';
}
