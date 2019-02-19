<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class NetworkUserType extends Enum
{
    const INTERNAL = 'Internal';
    const CUSTOMER = 'Customer';
    const PARTNER = 'Partner';
}
