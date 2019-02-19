<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RecordActionType extends Enum
{
    const FLOW = 'Flow';
    const QUICK_ACTION = 'QuickAction';
}
