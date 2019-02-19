<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class APIAccessLevel extends Enum
{
    const UNRESTRICTED = 'Unrestricted';
    const RESTRICTED = 'Restricted';
}
