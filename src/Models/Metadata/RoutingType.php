<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RoutingType extends Enum
{
    const UNANIMOUS = 'Unanimous';
    const FIRST_RESPONSE = 'FirstResponse';
}
