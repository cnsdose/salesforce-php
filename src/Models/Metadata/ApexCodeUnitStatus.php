<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ApexCodeUnitStatus extends Enum
{
    const INACTIVE = 'Inactive';
    const ACTIVE = 'Active';
    const DELETED = 'Deleted';
}
