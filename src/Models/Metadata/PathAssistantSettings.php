<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PathAssistantSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canOverrideAutoPathCollapseWithUserPref
 * @property bool|null $pathAssistantEnabled
 */
class PathAssistantSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanOverrideAutoPathCollapseWithUserPref(bool $canOverrideAutoPathCollapseWithUserPref)
    {
        $this->canOverrideAutoPathCollapseWithUserPref = $canOverrideAutoPathCollapseWithUserPref;
    }

    public function setPathAssistantEnabled(bool $pathAssistantEnabled)
    {
        $this->pathAssistantEnabled = $pathAssistantEnabled;
    }
}
