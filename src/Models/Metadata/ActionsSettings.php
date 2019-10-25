<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ActionsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableDefaultQuickActionsOn
 * @property bool|null $enableMdpEnabled
 * @property bool|null $enableThirdPartyActions
 */
class ActionsSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableDefaultQuickActionsOn(bool $enableDefaultQuickActionsOn)
    {
        $this->enableDefaultQuickActionsOn = $enableDefaultQuickActionsOn;
    }

    public function setEnableMdpEnabled(bool $enableMdpEnabled)
    {
        $this->enableMdpEnabled = $enableMdpEnabled;
    }

    public function setEnableThirdPartyActions(bool $enableThirdPartyActions)
    {
        $this->enableThirdPartyActions = $enableThirdPartyActions;
    }
}
