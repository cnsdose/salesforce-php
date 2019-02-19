<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeSort
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property StrategyNodeSortField[]|null $field
 */
class StrategyNodeSort extends StrategyNodeUnionBase
{
    public static $classMap = [
        'field' => [
            'multiple' => true,
            'type' => StrategyNodeSortField::class,
        ],
    ];

    public function setField(array $field)
    {
        $this->field = $field;
    }
}
