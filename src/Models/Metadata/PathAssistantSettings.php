<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PathAssistantSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $pathAssistantEnabled
 */
class PathAssistantSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setPathAssistantEnabled(bool $pathAssistantEnabled)
    {
        $this->pathAssistantEnabled = $pathAssistantEnabled;
    }
}
