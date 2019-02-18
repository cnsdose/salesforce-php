<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SummaryOperations extends Enum
{
    const COUNT = 'count';
    const SUM = 'sum';
    const MIN = 'min';
    const MAX = 'max';
}
