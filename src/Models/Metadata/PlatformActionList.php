<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformActionList
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionListContext
 * @property PlatformActionListItem[]|null $platformActionListItems
 * @property string|null $relatedSourceEntity
 */
class PlatformActionList extends Metadata
{
    public static $classMap = [
        'platformActionListItems' => [
            'multiple' => true,
            'type' => PlatformActionListItem::class,
        ],
    ];

    public function setActionListContext(PlatformActionListContext $actionListContext)
    {
        $this->actionListContext = $actionListContext->getValue();
    }

    public function setPlatformActionListItems(array $platformActionListItems)
    {
        $this->platformActionListItems = $platformActionListItems;
    }

    public function setRelatedSourceEntity(string $relatedSourceEntity)
    {
        $this->relatedSourceEntity = $relatedSourceEntity;
    }
}
