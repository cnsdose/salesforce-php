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
 * @property bool|null $enableFindSimilarOpportunities
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

    public function setEnableFindSimilarOpportunities(bool $enableFindSimilarOpportunities)
    {
        $this->enableFindSimilarOpportunities = $enableFindSimilarOpportunities;
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
