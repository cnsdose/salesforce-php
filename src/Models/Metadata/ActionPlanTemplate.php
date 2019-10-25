<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionPlanTemplate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ActionPlanTemplateItem[]|null $actionPlanTemplateItem
 * @property string|null $description
 * @property string|null $name
 * @property string|null $targetEntityType
 * @property string|null $uniqueName
 */
class ActionPlanTemplate extends Metadata
{
    public static $classMap = [
        'actionPlanTemplateItem' => [
            'multiple' => true,
            'type' => ActionPlanTemplateItem::class,
        ],
    ];

    public function setActionPlanTemplateItem(array $actionPlanTemplateItem)
    {
        $this->actionPlanTemplateItem = $actionPlanTemplateItem;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setTargetEntityType(string $targetEntityType)
    {
        $this->targetEntityType = $targetEntityType;
    }

    public function setUniqueName(string $uniqueName)
    {
        $this->uniqueName = $uniqueName;
    }
}
