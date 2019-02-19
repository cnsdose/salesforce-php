<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformActionType extends Enum
{
    const QUICK_ACTION = 'QuickAction';
    const STANDARD_BUTTON = 'StandardButton';
    const CUSTOM_BUTTON = 'CustomButton';
    const PRODUCTIVITY_ACTION = 'ProductivityAction';
    const ACTION_LINK = 'ActionLink';
    const INVOCABLE_ACTION = 'InvocableAction';
}
