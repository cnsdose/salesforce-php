<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrderSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableNegativeQuantity
 * @property bool|null $enableOrders
 * @property bool|null $enableReductionOrders
 * @property bool|null $enableZeroQuantity
 */
class OrderSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableNegativeQuantity(bool $enableNegativeQuantity)
    {
        $this->enableNegativeQuantity = $enableNegativeQuantity;
    }

    public function setEnableOrders(bool $enableOrders)
    {
        $this->enableOrders = $enableOrders;
    }

    public function setEnableReductionOrders(bool $enableReductionOrders)
    {
        $this->enableReductionOrders = $enableReductionOrders;
    }

    public function setEnableZeroQuantity(bool $enableZeroQuantity)
    {
        $this->enableZeroQuantity = $enableZeroQuantity;
    }
}
