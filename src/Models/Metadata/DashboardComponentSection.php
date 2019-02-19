<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardComponentSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $columnSize
 * @property DashboardComponent[]|null $components
 */
class DashboardComponentSection
{
    public static $classMap = [
        'components' => [
            'multiple' => true,
            'type' => DashboardComponent::class,
        ],
    ];

    public function setColumnSize(DashboardComponentSize $columnSize)
    {
        $this->columnSize = $columnSize->getValue();
    }

    public function setComponents(array $components)
    {
        $this->components = $components;
    }
}
