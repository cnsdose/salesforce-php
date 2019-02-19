<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CommunityRoles
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customerUserRole
 * @property string|null $employeeUserRole
 * @property string|null $partnerUserRole
 */
class CommunityRoles
{
    public static $classMap = [
    ];

    public function setCustomerUserRole(string $customerUserRole)
    {
        $this->customerUserRole = $customerUserRole;
    }

    public function setEmployeeUserRole(string $employeeUserRole)
    {
        $this->employeeUserRole = $employeeUserRole;
    }

    public function setPartnerUserRole(string $partnerUserRole)
    {
        $this->partnerUserRole = $partnerUserRole;
    }
}
