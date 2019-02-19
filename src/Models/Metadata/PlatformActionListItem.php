<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PlatformActionListItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $actionName
 * @property string|null $actionType
 * @property int|null $sortOrder
 * @property string|null $subtype
 */
class PlatformActionListItem
{
    public static $classMap = [
    ];

    public function setActionName(string $actionName)
    {
        $this->actionName = $actionName;
    }

    public function setActionType(PlatformActionType $actionType)
    {
        $this->actionType = $actionType->getValue();
    }

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setSubtype(string $subtype)
    {
        $this->subtype = $subtype;
    }
}
