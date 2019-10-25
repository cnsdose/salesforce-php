<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionPlanTemplateItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ActionPlanTemplateItemValue[]|null $actionPlanTemplateItemValue
 * @property int|null $displayOrder
 * @property bool|null $isRequired
 * @property string|null $name
 * @property string|null $uniqueName
 */
class ActionPlanTemplateItem
{
    public static $classMap = [
        'actionPlanTemplateItemValue' => [
            'multiple' => true,
            'type' => ActionPlanTemplateItemValue::class,
        ],
    ];

    public function setActionPlanTemplateItemValue(array $actionPlanTemplateItemValue)
    {
        $this->actionPlanTemplateItemValue = $actionPlanTemplateItemValue;
    }

    public function setDisplayOrder(int $displayOrder)
    {
        $this->displayOrder = $displayOrder;
    }

    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setUniqueName(string $uniqueName)
    {
        $this->uniqueName = $uniqueName;
    }
}
