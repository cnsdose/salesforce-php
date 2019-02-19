<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowCategory
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $description
 * @property FlowCategoryItems[]|null $flowCategoryItems
 * @property string|null $masterLabel
 */
class FlowCategory extends Metadata
{
    public static $classMap = [
        'flowCategoryItems' => [
            'multiple' => true,
            'type' => FlowCategoryItems::class,
        ],
    ];

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setFlowCategoryItems(array $flowCategoryItems)
    {
        $this->flowCategoryItems = $flowCategoryItems;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }
}
