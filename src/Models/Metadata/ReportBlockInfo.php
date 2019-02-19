<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportBlockInfo
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ReportAggregateReference[]|null $aggregateReferences
 * @property string|null $blockId
 * @property string|null $joinTable
 */
class ReportBlockInfo
{
    public static $classMap = [
        'aggregateReferences' => [
            'multiple' => true,
            'type' => ReportAggregateReference::class,
        ],
    ];

    public function setAggregateReferences(array $aggregateReferences)
    {
        $this->aggregateReferences = $aggregateReferences;
    }

    public function setBlockId(string $blockId)
    {
        $this->blockId = $blockId;
    }

    public function setJoinTable(string $joinTable)
    {
        $this->joinTable = $joinTable;
    }
}
