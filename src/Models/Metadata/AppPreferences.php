<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppPreferences
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableCustomizeMyTabs
 * @property bool|null $enableKeyboardShortcuts
 * @property bool|null $enableListViewHover
 * @property bool|null $enableListViewReskin
 * @property bool|null $enableMultiMonitorComponents
 * @property bool|null $enablePinTabs
 * @property bool|null $enableTabHover
 * @property bool|null $enableTabLimits
 * @property bool|null $saveUserSessions
 */
class AppPreferences
{
    public static $classMap = [
    ];

    public function setEnableCustomizeMyTabs(bool $enableCustomizeMyTabs)
    {
        $this->enableCustomizeMyTabs = $enableCustomizeMyTabs;
    }

    public function setEnableKeyboardShortcuts(bool $enableKeyboardShortcuts)
    {
        $this->enableKeyboardShortcuts = $enableKeyboardShortcuts;
    }

    public function setEnableListViewHover(bool $enableListViewHover)
    {
        $this->enableListViewHover = $enableListViewHover;
    }

    public function setEnableListViewReskin(bool $enableListViewReskin)
    {
        $this->enableListViewReskin = $enableListViewReskin;
    }

    public function setEnableMultiMonitorComponents(bool $enableMultiMonitorComponents)
    {
        $this->enableMultiMonitorComponents = $enableMultiMonitorComponents;
    }

    public function setEnablePinTabs(bool $enablePinTabs)
    {
        $this->enablePinTabs = $enablePinTabs;
    }

    public function setEnableTabHover(bool $enableTabHover)
    {
        $this->enableTabHover = $enableTabHover;
    }

    public function setEnableTabLimits(bool $enableTabLimits)
    {
        $this->enableTabLimits = $enableTabLimits;
    }

    public function setSaveUserSessions(bool $saveUserSessions)
    {
        $this->saveUserSessions = $saveUserSessions;
    }
}
