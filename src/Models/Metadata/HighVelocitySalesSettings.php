<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class HighVelocitySalesSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableDispositionCategory
 * @property bool|null $enableEngagementWaveAnalyticsPref
 * @property bool|null $enableHighVelocitySales
 * @property bool|null $enableHighVelocitySalesSetup
 */
class HighVelocitySalesSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableDispositionCategory(bool $enableDispositionCategory)
    {
        $this->enableDispositionCategory = $enableDispositionCategory;
    }

    public function setEnableEngagementWaveAnalyticsPref(bool $enableEngagementWaveAnalyticsPref)
    {
        $this->enableEngagementWaveAnalyticsPref = $enableEngagementWaveAnalyticsPref;
    }

    public function setEnableHighVelocitySales(bool $enableHighVelocitySales)
    {
        $this->enableHighVelocitySales = $enableHighVelocitySales;
    }

    public function setEnableHighVelocitySalesSetup(bool $enableHighVelocitySalesSetup)
    {
        $this->enableHighVelocitySalesSetup = $enableHighVelocitySalesSetup;
    }
}
