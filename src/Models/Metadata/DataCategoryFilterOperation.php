<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DataCategoryFilterOperation extends Enum
{
    const ABOVE = 'above';
    const BELOW = 'below';
    const AT = 'at';
    const ABOVE_OR_BELOW = 'aboveOrBelow';
}
