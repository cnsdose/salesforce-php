<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProductSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCascadeActivateToRelatedPrices
 * @property bool|null $enableQuantitySchedule
 * @property bool|null $enableRevenueSchedule
 */
class ProductSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableCascadeActivateToRelatedPrices(bool $enableCascadeActivateToRelatedPrices)
    {
        $this->enableCascadeActivateToRelatedPrices = $enableCascadeActivateToRelatedPrices;
    }

    public function setEnableQuantitySchedule(bool $enableQuantitySchedule)
    {
        $this->enableQuantitySchedule = $enableQuantitySchedule;
    }

    public function setEnableRevenueSchedule(bool $enableRevenueSchedule)
    {
        $this->enableRevenueSchedule = $enableRevenueSchedule;
    }
}
