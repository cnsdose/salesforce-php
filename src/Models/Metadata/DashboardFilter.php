<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DashboardFilterOption[]|null $dashboardFilterOptions
 * @property string|null $name
 */
class DashboardFilter
{
    public static $classMap = [
        'dashboardFilterOptions' => [
            'multiple' => true,
            'type' => DashboardFilterOption::class,
        ],
    ];

    public function setDashboardFilterOptions(array $dashboardFilterOptions)
    {
        $this->dashboardFilterOptions = $dashboardFilterOptions;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
