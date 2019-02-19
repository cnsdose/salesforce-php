<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DupeActionType extends Enum
{
    const ALLOW = 'Allow';
    const BLOCK = 'Block';
}
