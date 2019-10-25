<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class InvocableActionSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $isPartialSaveAllowed
 */
class InvocableActionSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setIsPartialSaveAllowed(bool $isPartialSaveAllowed)
    {
        $this->isPartialSaveAllowed = $isPartialSaveAllowed;
    }
}
