<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeMap
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property MapExpression[]|null $mapExpression
 */
class StrategyNodeMap extends StrategyNodeUnionBase
{
    public static $classMap = [
        'mapExpression' => [
            'multiple' => true,
            'type' => MapExpression::class,
        ],
    ];

    public function setMapExpression(array $mapExpression)
    {
        $this->mapExpression = $mapExpression;
    }
}
