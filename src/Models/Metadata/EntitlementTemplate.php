<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class EntitlementTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $businessHours
 * @property int|null $casesPerEntitlement
 * @property string|null $entitlementProcess
 * @property bool|null $isPerIncident
 * @property int|null $term
 * @property string|null $type
 */
class EntitlementTemplate extends Metadata
{
    public static $classMap = [
    ];

    public function setBusinessHours(string $businessHours)
    {
        $this->businessHours = $businessHours;
    }

    public function setCasesPerEntitlement(int $casesPerEntitlement)
    {
        $this->casesPerEntitlement = $casesPerEntitlement;
    }

    public function setEntitlementProcess(string $entitlementProcess)
    {
        $this->entitlementProcess = $entitlementProcess;
    }

    public function setIsPerIncident(bool $isPerIncident)
    {
        $this->isPerIncident = $isPerIncident;
    }

    public function setTerm(int $term)
    {
        $this->term = $term;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
