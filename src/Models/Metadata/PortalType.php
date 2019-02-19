<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PortalType extends Enum
{
    const CUSTOMER_SUCCESS = 'CustomerSuccess';
    const PARTNER = 'Partner';
    const NETWORK = 'Network';
}
