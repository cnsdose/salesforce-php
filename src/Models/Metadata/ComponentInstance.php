<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ComponentInstance
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ComponentInstanceProperty[]|null $componentInstanceProperties
 * @property string|null $componentName
 * @property UiFormulaRule|null $visibilityRule
 */
class ComponentInstance
{
    public static $classMap = [
        'componentInstanceProperties' => [
            'multiple' => true,
            'type' => ComponentInstanceProperty::class,
        ],
        'visibilityRule' => [
            'multiple' => false,
            'type' => UiFormulaRule::class,
        ],
    ];

    public function setComponentInstanceProperties(array $componentInstanceProperties)
    {
        $this->componentInstanceProperties = $componentInstanceProperties;
    }

    public function setComponentName(string $componentName)
    {
        $this->componentName = $componentName;
    }

    public function setVisibilityRule(UiFormulaRule $visibilityRule)
    {
        $this->visibilityRule = $visibilityRule;
    }
}
