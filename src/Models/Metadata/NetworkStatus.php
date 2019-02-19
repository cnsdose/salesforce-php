<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class NetworkStatus extends Enum
{
    const UNDER_CONSTRUCTION = 'UnderConstruction';
    const LIVE = 'Live';
    const DOWN_FOR_MAINTENANCE = 'DownForMaintenance';
}
