<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SharedTo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $allCustomerPortalUsers
 * @property string|null $allInternalUsers
 * @property string|null $allPartnerUsers
 * @property string[]|null $channelProgramGroup
 * @property string[]|null $channelProgramGroups
 * @property string[]|null $group
 * @property string[]|null $groups
 * @property string[]|null $managerSubordinates
 * @property string[]|null $managers
 * @property string[]|null $portalRole
 * @property string[]|null $portalRoleAndSubordinates
 * @property string[]|null $queue
 * @property string[]|null $role
 * @property string[]|null $roleAndSubordinates
 * @property string[]|null $roleAndSubordinatesInternal
 * @property string[]|null $roles
 * @property string[]|null $rolesAndSubordinates
 * @property string[]|null $territories
 * @property string[]|null $territoriesAndSubordinates
 * @property string[]|null $territory
 * @property string[]|null $territoryAndSubordinates
 */
class SharedTo
{
    public function setAllCustomerPortalUsers(string $allCustomerPortalUsers)
    {
        $this->allCustomerPortalUsers = $allCustomerPortalUsers;
    }

    public function setAllInternalUsers(string $allInternalUsers)
    {
        $this->allInternalUsers = $allInternalUsers;
    }

    public function setAllPartnerUsers(string $allPartnerUsers)
    {
        $this->allPartnerUsers = $allPartnerUsers;
    }

    public function setChannelProgramGroup(array $channelProgramGroup)
    {
        $this->channelProgramGroup = $channelProgramGroup;
    }

    public function setChannelProgramGroups(array $channelProgramGroups)
    {
        $this->channelProgramGroups = $channelProgramGroups;
    }

    public function setGroup(array $group)
    {
        $this->group = $group;
    }

    public function setGroups(array $groups)
    {
        $this->groups = $groups;
    }

    public function setManagerSubordinates(array $managerSubordinates)
    {
        $this->managerSubordinates = $managerSubordinates;
    }

    public function setManagers(array $managers)
    {
        $this->managers = $managers;
    }

    public function setPortalRole(array $portalRole)
    {
        $this->portalRole = $portalRole;
    }

    public function setPortalRoleAndSubordinates(array $portalRoleAndSubordinates)
    {
        $this->portalRoleAndSubordinates = $portalRoleAndSubordinates;
    }

    public function setQueue(array $queue)
    {
        $this->queue = $queue;
    }

    public function setRole(array $role)
    {
        $this->role = $role;
    }

    public function setRoleAndSubordinates(array $roleAndSubordinates)
    {
        $this->roleAndSubordinates = $roleAndSubordinates;
    }

    public function setRoleAndSubordinatesInternal(array $roleAndSubordinatesInternal)
    {
        $this->roleAndSubordinatesInternal = $roleAndSubordinatesInternal;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function setRolesAndSubordinates(array $rolesAndSubordinates)
    {
        $this->rolesAndSubordinates = $rolesAndSubordinates;
    }

    public function setTerritories(array $territories)
    {
        $this->territories = $territories;
    }

    public function setTerritoriesAndSubordinates(array $territoriesAndSubordinates)
    {
        $this->territoriesAndSubordinates = $territoriesAndSubordinates;
    }

    public function setTerritory(array $territory)
    {
        $this->territory = $territory;
    }

    public function setTerritoryAndSubordinates(array $territoryAndSubordinates)
    {
        $this->territoryAndSubordinates = $territoryAndSubordinates;
    }
}
