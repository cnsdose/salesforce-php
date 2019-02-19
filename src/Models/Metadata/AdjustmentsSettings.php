<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AdjustmentsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAdjustments
 * @property bool|null $enableOwnerAdjustments
 */
class AdjustmentsSettings
{
    public static $classMap = [
    ];

    public function setEnableAdjustments(bool $enableAdjustments)
    {
        $this->enableAdjustments = $enableAdjustments;
    }

    public function setEnableOwnerAdjustments(bool $enableOwnerAdjustments)
    {
        $this->enableOwnerAdjustments = $enableOwnerAdjustments;
    }
}
