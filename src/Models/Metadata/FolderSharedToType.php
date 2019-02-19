<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FolderSharedToType extends Enum
{
    const GROUP = 'Group';
    const ROLE = 'Role';
    const ROLE_AND_SUBORDINATES = 'RoleAndSubordinates';
    const ROLE_AND_SUBORDINATES_INTERNAL = 'RoleAndSubordinatesInternal';
    const MANAGER = 'Manager';
    const MANAGER_AND_SUBORDINATES_INTERNAL = 'ManagerAndSubordinatesInternal';
    const ORGANIZATION = 'Organization';
    const TERRITORY = 'Territory';
    const TERRITORY_AND_SUBORDINATES = 'TerritoryAndSubordinates';
    const ALL_PRM_USERS = 'AllPrmUsers';
    const USER = 'User';
    const PARTNER_USER = 'PartnerUser';
    const ALL_CSP_USERS = 'AllCspUsers';
    const CUSTOMER_PORTAL_USER = 'CustomerPortalUser';
    const PORTAL_ROLE = 'PortalRole';
    const PORTAL_ROLE_AND_SUBORDINATES = 'PortalRoleAndSubordinates';
    const CHANNEL_PROGRAM_GROUP = 'ChannelProgramGroup';
}
