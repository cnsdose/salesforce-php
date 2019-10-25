<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PicklistSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $isPicklistApiNameEditDisabled
 */
class PicklistSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setIsPicklistApiNameEditDisabled(bool $isPicklistApiNameEditDisabled)
    {
        $this->isPicklistApiNameEditDisabled = $isPicklistApiNameEditDisabled;
    }
}
