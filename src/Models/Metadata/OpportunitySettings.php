<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OpportunitySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $autoActivateNewReminders
 * @property bool|null $customizableProductSchedulesEnabled
 * @property bool|null $doesAutoAddSplitOwnerAsOpportunityTeamMember
 * @property bool|null $doesEnforceStandardOpportunitySaveLogic
 * @property bool|null $enableFindSimilarOpportunities
 * @property bool|null $enableOpportunityFieldHistoryTracking
 * @property bool|null $enableOpportunityInsightsInMobile
 * @property bool|null $enableOpportunityTeam
 * @property bool|null $enableUpdateReminders
 * @property FindSimilarOppFilter|null $findSimilarOppFilter
 * @property bool|null $promptToAddProducts
 */
class OpportunitySettings extends Metadata
{
    public static $classMap = [
        'findSimilarOppFilter' => [
            'multiple' => false,
            'type' => FindSimilarOppFilter::class,
        ],
    ];

    public function setAutoActivateNewReminders(bool $autoActivateNewReminders)
    {
        $this->autoActivateNewReminders = $autoActivateNewReminders;
    }

    public function setCustomizableProductSchedulesEnabled(bool $customizableProductSchedulesEnabled)
    {
        $this->customizableProductSchedulesEnabled = $customizableProductSchedulesEnabled;
    }

    public function setDoesAutoAddSplitOwnerAsOpportunityTeamMember(bool $doesAutoAddSplitOwnerAsOpportunityTeamMember)
    {
        $this->doesAutoAddSplitOwnerAsOpportunityTeamMember = $doesAutoAddSplitOwnerAsOpportunityTeamMember;
    }

    public function setDoesEnforceStandardOpportunitySaveLogic(bool $doesEnforceStandardOpportunitySaveLogic)
    {
        $this->doesEnforceStandardOpportunitySaveLogic = $doesEnforceStandardOpportunitySaveLogic;
    }

    public function setEnableFindSimilarOpportunities(bool $enableFindSimilarOpportunities)
    {
        $this->enableFindSimilarOpportunities = $enableFindSimilarOpportunities;
    }

    public function setEnableOpportunityFieldHistoryTracking(bool $enableOpportunityFieldHistoryTracking)
    {
        $this->enableOpportunityFieldHistoryTracking = $enableOpportunityFieldHistoryTracking;
    }

    public function setEnableOpportunityInsightsInMobile(bool $enableOpportunityInsightsInMobile)
    {
        $this->enableOpportunityInsightsInMobile = $enableOpportunityInsightsInMobile;
    }

    public function setEnableOpportunityTeam(bool $enableOpportunityTeam)
    {
        $this->enableOpportunityTeam = $enableOpportunityTeam;
    }

    public function setEnableUpdateReminders(bool $enableUpdateReminders)
    {
        $this->enableUpdateReminders = $enableUpdateReminders;
    }

    public function setFindSimilarOppFilter(FindSimilarOppFilter $findSimilarOppFilter)
    {
        $this->findSimilarOppFilter = $findSimilarOppFilter;
    }

    public function setPromptToAddProducts(bool $promptToAddProducts)
    {
        $this->promptToAddProducts = $promptToAddProducts;
    }
}
