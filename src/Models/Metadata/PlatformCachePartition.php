<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformCachePartition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property bool|null $isDefaultPartition
 * @property string|null $masterLabel
 * @property PlatformCachePartitionType[]|null $platformCachePartitionTypes
 */
class PlatformCachePartition extends Metadata
{
    public static $classMap = [
        'platformCachePartitionTypes' => [
            'multiple' => true,
            'type' => PlatformCachePartitionType::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setIsDefaultPartition(bool $isDefaultPartition)
    {
        $this->isDefaultPartition = $isDefaultPartition;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setPlatformCachePartitionTypes(array $platformCachePartitionTypes)
    {
        $this->platformCachePartitionTypes = $platformCachePartitionTypes;
    }
}
