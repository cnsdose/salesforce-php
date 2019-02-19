<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SessionSecurityLevel extends Enum
{
    const LOW = 'LOW';
    const STANDARD = 'STANDARD';
    const HIGH_ASSURANCE = 'HIGH_ASSURANCE';
}
