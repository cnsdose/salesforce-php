<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SensitiveDataActionType extends Enum
{
    const REMOVE = 'Remove';
    const REPLACE = 'Replace';
}
