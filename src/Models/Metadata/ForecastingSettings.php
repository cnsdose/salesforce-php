<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ForecastingSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $displayCurrency
 * @property bool|null $enableForecasts
 * @property ForecastingCategoryMapping[]|null $forecastingCategoryMappings
 * @property ForecastingDisplayedFamilySettings[]|null $forecastingDisplayedFamilySettings
 * @property ForecastingTypeSettings[]|null $forecastingTypeSettings
 */
class ForecastingSettings extends Metadata
{
    public static $classMap = [
        'forecastingCategoryMappings' => [
            'multiple' => true,
            'type' => ForecastingCategoryMapping::class,
        ],
        'forecastingDisplayedFamilySettings' => [
            'multiple' => true,
            'type' => ForecastingDisplayedFamilySettings::class,
        ],
        'forecastingTypeSettings' => [
            'multiple' => true,
            'type' => ForecastingTypeSettings::class,
        ],
    ];

    public function setDisplayCurrency(DisplayCurrency $displayCurrency)
    {
        $this->displayCurrency = $displayCurrency->getValue();
    }

    public function setEnableForecasts(bool $enableForecasts)
    {
        $this->enableForecasts = $enableForecasts;
    }

    public function setForecastingCategoryMappings(array $forecastingCategoryMappings)
    {
        $this->forecastingCategoryMappings = $forecastingCategoryMappings;
    }

    public function setForecastingDisplayedFamilySettings(array $forecastingDisplayedFamilySettings)
    {
        $this->forecastingDisplayedFamilySettings = $forecastingDisplayedFamilySettings;
    }

    public function setForecastingTypeSettings(array $forecastingTypeSettings)
    {
        $this->forecastingTypeSettings = $forecastingTypeSettings;
    }
}
