<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WeightedSourceCategory
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $sourceCategoryApiName
 * @property float|null $weight
 */
class WeightedSourceCategory
{
    public static $classMap = [
    ];

    public function setSourceCategoryApiName(string $sourceCategoryApiName)
    {
        $this->sourceCategoryApiName = $sourceCategoryApiName;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }
}
