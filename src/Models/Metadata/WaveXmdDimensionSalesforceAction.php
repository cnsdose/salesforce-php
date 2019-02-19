<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdDimensionSalesforceAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enabled
 * @property string|null $salesforceActionName
 * @property int|null $sortIndex
 */
class WaveXmdDimensionSalesforceAction
{
    public static $classMap = [
    ];

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setSalesforceActionName(string $salesforceActionName)
    {
        $this->salesforceActionName = $salesforceActionName;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
}
