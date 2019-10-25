<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponentGroupingSortProperties
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DashboardComponentGroupingSort[]|null $groupingSorts
 */
class DashboardComponentGroupingSortProperties
{
    public static $classMap = [
        'groupingSorts' => [
            'multiple' => true,
            'type' => DashboardComponentGroupingSort::class,
        ],
    ];

    public function setGroupingSorts(array $groupingSorts)
    {
        $this->groupingSorts = $groupingSorts;
    }
}
