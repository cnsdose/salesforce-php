<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformCachePartitionType
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $allocatedCapacity
 * @property int|null $allocatedPurchasedCapacity
 * @property int|null $allocatedTrialCapacity
 * @property string|null $cacheType
 */
class PlatformCachePartitionType
{
    public static $classMap = [
    ];

    public function setAllocatedCapacity(int $allocatedCapacity)
    {
        $this->allocatedCapacity = $allocatedCapacity;
    }

    public function setAllocatedPurchasedCapacity(int $allocatedPurchasedCapacity)
    {
        $this->allocatedPurchasedCapacity = $allocatedPurchasedCapacity;
    }

    public function setAllocatedTrialCapacity(int $allocatedTrialCapacity)
    {
        $this->allocatedTrialCapacity = $allocatedTrialCapacity;
    }

    public function setCacheType(PlatformCacheType $cacheType)
    {
        $this->cacheType = $cacheType->getValue();
    }
}
