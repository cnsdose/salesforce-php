<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionDefaultItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property bool|null $isMandatory
 * @property bool|null $isUiRemoveHidden
 * @property string|null $pinned
 * @property int|null $position
 * @property string|null $type
 */
class RecordActionDefaultItem
{
    public static $classMap = [
    ];

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function setIsMandatory(bool $isMandatory)
    {
        $this->isMandatory = $isMandatory;
    }

    public function setIsUiRemoveHidden(bool $isUiRemoveHidden)
    {
        $this->isUiRemoveHidden = $isUiRemoveHidden;
    }

    public function setPinned(PinnedAction $pinned)
    {
        $this->pinned = $pinned->getValue();
    }

    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    public function setType(RecordActionType $type)
    {
        $this->type = $type->getValue();
    }
}
