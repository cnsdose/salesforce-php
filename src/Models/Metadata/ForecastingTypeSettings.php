<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ForecastingTypeSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $active
 * @property AdjustmentsSettings|null $adjustmentsSettings
 * @property string[]|null $displayedCategoryApiNames
 * @property ForecastRangeSettings|null $forecastRangeSettings
 * @property string[]|null $forecastedCategoryApiNames
 * @property string|null $forecastingDateType
 * @property bool|null $hasProductFamily
 * @property bool|null $isAmount
 * @property bool|null $isAvailable
 * @property bool|null $isQuantity
 * @property string[]|null $managerAdjustableCategoryApiNames
 * @property string|null $masterLabel
 * @property string|null $name
 * @property OpportunityListFieldsLabelMapping[]|null $opportunityListFieldsLabelMappings
 * @property OpportunityListFieldsSelectedSettings|null $opportunityListFieldsSelectedSettings
 * @property OpportunityListFieldsUnselectedSettings|null $opportunityListFieldsUnselectedSettings
 * @property string|null $opportunitySplitName
 * @property string[]|null $ownerAdjustableCategoryApiNames
 * @property QuotasSettings|null $quotasSettings
 * @property string|null $territory2ModelName
 */
class ForecastingTypeSettings
{
    public static $classMap = [
        'adjustmentsSettings' => [
            'multiple' => false,
            'type' => AdjustmentsSettings::class,
        ],
        'forecastRangeSettings' => [
            'multiple' => false,
            'type' => ForecastRangeSettings::class,
        ],
        'opportunityListFieldsLabelMappings' => [
            'multiple' => true,
            'type' => OpportunityListFieldsLabelMapping::class,
        ],
        'opportunityListFieldsSelectedSettings' => [
            'multiple' => false,
            'type' => OpportunityListFieldsSelectedSettings::class,
        ],
        'opportunityListFieldsUnselectedSettings' => [
            'multiple' => false,
            'type' => OpportunityListFieldsUnselectedSettings::class,
        ],
        'quotasSettings' => [
            'multiple' => false,
            'type' => QuotasSettings::class,
        ],
    ];

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function setAdjustmentsSettings(AdjustmentsSettings $adjustmentsSettings)
    {
        $this->adjustmentsSettings = $adjustmentsSettings;
    }

    public function setDisplayedCategoryApiNames(array $displayedCategoryApiNames)
    {
        $this->displayedCategoryApiNames = $displayedCategoryApiNames;
    }

    public function setForecastRangeSettings(ForecastRangeSettings $forecastRangeSettings)
    {
        $this->forecastRangeSettings = $forecastRangeSettings;
    }

    public function setForecastedCategoryApiNames(array $forecastedCategoryApiNames)
    {
        $this->forecastedCategoryApiNames = $forecastedCategoryApiNames;
    }

    public function setForecastingDateType(ForecastingDateType $forecastingDateType)
    {
        $this->forecastingDateType = $forecastingDateType->getValue();
    }

    public function setHasProductFamily(bool $hasProductFamily)
    {
        $this->hasProductFamily = $hasProductFamily;
    }

    public function setIsAmount(bool $isAmount)
    {
        $this->isAmount = $isAmount;
    }

    public function setIsAvailable(bool $isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    public function setIsQuantity(bool $isQuantity)
    {
        $this->isQuantity = $isQuantity;
    }

    public function setManagerAdjustableCategoryApiNames(array $managerAdjustableCategoryApiNames)
    {
        $this->managerAdjustableCategoryApiNames = $managerAdjustableCategoryApiNames;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setOpportunityListFieldsLabelMappings(array $opportunityListFieldsLabelMappings)
    {
        $this->opportunityListFieldsLabelMappings = $opportunityListFieldsLabelMappings;
    }

    public function setOpportunityListFieldsSelectedSettings(OpportunityListFieldsSelectedSettings $opportunityListFieldsSelectedSettings)
    {
        $this->opportunityListFieldsSelectedSettings = $opportunityListFieldsSelectedSettings;
    }

    public function setOpportunityListFieldsUnselectedSettings(OpportunityListFieldsUnselectedSettings $opportunityListFieldsUnselectedSettings)
    {
        $this->opportunityListFieldsUnselectedSettings = $opportunityListFieldsUnselectedSettings;
    }

    public function setOpportunitySplitName(string $opportunitySplitName)
    {
        $this->opportunitySplitName = $opportunitySplitName;
    }

    public function setOwnerAdjustableCategoryApiNames(array $ownerAdjustableCategoryApiNames)
    {
        $this->ownerAdjustableCategoryApiNames = $ownerAdjustableCategoryApiNames;
    }

    public function setQuotasSettings(QuotasSettings $quotasSettings)
    {
        $this->quotasSettings = $quotasSettings;
    }

    public function setTerritory2ModelName(string $territory2ModelName)
    {
        $this->territory2ModelName = $territory2ModelName;
    }
}
