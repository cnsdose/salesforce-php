<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ProcessSubmitterType extends Enum
{
    const GROUP = 'group';
    const ROLE = 'role';
    const USER = 'user';
    const ROLE_SUBORDINATES = 'roleSubordinates';
    const ROLE_SUBORDINATES_INTERNAL = 'roleSubordinatesInternal';
    const OWNER = 'owner';
    const CREATOR = 'creator';
    const PARTNER_USER = 'partnerUser';
    const CUSTOMER_PORTAL_USER = 'customerPortalUser';
    const PORTAL_ROLE = 'portalRole';
    const PORTAL_ROLE_SUBORDINATES = 'portalRoleSubordinates';
    const ALL_INTERNAL_USERS = 'allInternalUsers';
}
