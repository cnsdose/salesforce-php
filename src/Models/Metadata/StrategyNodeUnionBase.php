<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeUnionBase
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $limit
 */
class StrategyNodeUnionBase extends StrategyNodeBase
{
    public static $classMap = [
    ];

    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }
}
