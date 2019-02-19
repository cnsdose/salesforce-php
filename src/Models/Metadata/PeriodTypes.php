<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PeriodTypes extends Enum
{
    const MONTH = 'Month';
    const QUARTER = 'Quarter';
    const WEEK = 'Week';
    const YEAR = 'Year';
}
