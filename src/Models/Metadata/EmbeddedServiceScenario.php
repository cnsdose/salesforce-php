<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceScenario extends Enum
{
    const SALES = 'Sales';
    const SERVICE = 'Service';
    const BASIC = 'Basic';
}
