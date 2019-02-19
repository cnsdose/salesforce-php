<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmailServicesErrorAction extends Enum
{
    const USE_SYSTEM_DEFAULT = 'UseSystemDefault';
    const BOUNCE = 'Bounce';
    const DISCARD = 'Discard';
    const REQUEUE = 'Requeue';
}
