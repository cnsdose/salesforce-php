<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DupeSecurityOptionType extends Enum
{
    const ENFORCE_SHARING_RULES = 'EnforceSharingRules';
    const BYPASS_SHARING_RULES = 'BypassSharingRules';
}
