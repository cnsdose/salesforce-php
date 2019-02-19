<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PermissionSetTabVisibility extends Enum
{
    const NONE = 'None';
    const AVAILABLE = 'Available';
    const VISIBLE = 'Visible';
}
