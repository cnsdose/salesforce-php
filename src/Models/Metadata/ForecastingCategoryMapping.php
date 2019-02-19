<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ForecastingCategoryMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $forecastingItemCategoryApiName
 * @property WeightedSourceCategory[]|null $weightedSourceCategories
 */
class ForecastingCategoryMapping
{
    public static $classMap = [
        'weightedSourceCategories' => [
            'multiple' => true,
            'type' => WeightedSourceCategory::class,
        ],
    ];

    public function setForecastingItemCategoryApiName(string $forecastingItemCategoryApiName)
    {
        $this->forecastingItemCategoryApiName = $forecastingItemCategoryApiName;
    }

    public function setWeightedSourceCategories(array $weightedSourceCategories)
    {
        $this->weightedSourceCategories = $weightedSourceCategories;
    }
}
