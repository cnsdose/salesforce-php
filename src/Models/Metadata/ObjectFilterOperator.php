<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ObjectFilterOperator extends Enum
{
    const WITH = 'with';
    const WITHOUT = 'without';
}
