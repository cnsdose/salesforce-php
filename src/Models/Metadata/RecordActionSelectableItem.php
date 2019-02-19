<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecordActionSelectableItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $action
 * @property string|null $type
 */
class RecordActionSelectableItem
{
    public static $classMap = [
    ];

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function setType(RecordActionType $type)
    {
        $this->type = $type->getValue();
    }
}
