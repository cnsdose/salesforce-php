<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ForecastingDisplayedFamilySettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $productFamily
 */
class ForecastingDisplayedFamilySettings
{
    public static $classMap = [
    ];

    public function setProductFamily(string $productFamily)
    {
        $this->productFamily = $productFamily;
    }
}
