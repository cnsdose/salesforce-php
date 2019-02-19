<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class CMSSourceConnectionType extends Enum
{
    const PUBLIC = 'Public';
    const AUTHENTICATED = 'Authenticated';
}
