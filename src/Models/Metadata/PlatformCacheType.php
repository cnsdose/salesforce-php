<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformCacheType extends Enum
{
    const SESSION = 'Session';
    const ORGANIZATION = 'Organization';
}
