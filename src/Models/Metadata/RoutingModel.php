<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RoutingModel extends Enum
{
    const LEAST_ACTIVE = 'LEAST_ACTIVE';
    const MOST_AVAILABLE = 'MOST_AVAILABLE';
    const EXTERNAL_ROUTING = 'EXTERNAL_ROUTING';
}
