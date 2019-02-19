<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionLinkUserVisibility extends Enum
{
    const CREATOR = 'Creator';
    const EVERYONE = 'Everyone';
    const EVERYONE_BUT_CREATOR = 'EveryoneButCreator';
    const MANAGER = 'Manager';
    const CUSTOM_USER = 'CustomUser';
    const CUSTOM_EXCLUDED_USER = 'CustomExcludedUser';
}
