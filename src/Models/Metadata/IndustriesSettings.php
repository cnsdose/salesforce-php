<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IndustriesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $allowMultipleProducersToWorkOnSamePolicy
 * @property bool|null $enableAccessToMasterListOfCoverageTypes
 * @property bool|null $enableBlockResourceAvailabilityOrgPref
 * @property bool|null $enableEventManagementOrgPref
 * @property bool|null $enableHCReferralScoring
 * @property bool|null $enableManyToManyRelationships
 * @property bool|null $enableMortgageRlaTotalsOrgPref
 * @property bool|null $enableMultiResourceOrgPref
 * @property bool|null $enableObjectDetection
 * @property bool|null $enableOverbookingOrgPref
 * @property bool|null $enableProviderSearchSyncOrgPref
 * @property bool|null $enableReferralScoring
 * @property bool|null $enableSentimentAnalysis
 */
class IndustriesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setAllowMultipleProducersToWorkOnSamePolicy(bool $allowMultipleProducersToWorkOnSamePolicy)
    {
        $this->allowMultipleProducersToWorkOnSamePolicy = $allowMultipleProducersToWorkOnSamePolicy;
    }

    public function setEnableAccessToMasterListOfCoverageTypes(bool $enableAccessToMasterListOfCoverageTypes)
    {
        $this->enableAccessToMasterListOfCoverageTypes = $enableAccessToMasterListOfCoverageTypes;
    }

    public function setEnableBlockResourceAvailabilityOrgPref(bool $enableBlockResourceAvailabilityOrgPref)
    {
        $this->enableBlockResourceAvailabilityOrgPref = $enableBlockResourceAvailabilityOrgPref;
    }

    public function setEnableEventManagementOrgPref(bool $enableEventManagementOrgPref)
    {
        $this->enableEventManagementOrgPref = $enableEventManagementOrgPref;
    }

    public function setEnableHCReferralScoring(bool $enableHCReferralScoring)
    {
        $this->enableHCReferralScoring = $enableHCReferralScoring;
    }

    public function setEnableManyToManyRelationships(bool $enableManyToManyRelationships)
    {
        $this->enableManyToManyRelationships = $enableManyToManyRelationships;
    }

    public function setEnableMortgageRlaTotalsOrgPref(bool $enableMortgageRlaTotalsOrgPref)
    {
        $this->enableMortgageRlaTotalsOrgPref = $enableMortgageRlaTotalsOrgPref;
    }

    public function setEnableMultiResourceOrgPref(bool $enableMultiResourceOrgPref)
    {
        $this->enableMultiResourceOrgPref = $enableMultiResourceOrgPref;
    }

    public function setEnableObjectDetection(bool $enableObjectDetection)
    {
        $this->enableObjectDetection = $enableObjectDetection;
    }

    public function setEnableOverbookingOrgPref(bool $enableOverbookingOrgPref)
    {
        $this->enableOverbookingOrgPref = $enableOverbookingOrgPref;
    }

    public function setEnableProviderSearchSyncOrgPref(bool $enableProviderSearchSyncOrgPref)
    {
        $this->enableProviderSearchSyncOrgPref = $enableProviderSearchSyncOrgPref;
    }

    public function setEnableReferralScoring(bool $enableReferralScoring)
    {
        $this->enableReferralScoring = $enableReferralScoring;
    }

    public function setEnableSentimentAnalysis(bool $enableSentimentAnalysis)
    {
        $this->enableSentimentAnalysis = $enableSentimentAnalysis;
    }
}
