<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TimeSheetFrequency extends Enum
{
    const DAILY = 'Daily';
    const WEEKLY = 'Weekly';
    const EVERY_TWO_WEEKS = 'EveryTwoWeeks';
    const TWICE_AMONTH = 'TwiceAMonth';
    const MONTHLY = 'Monthly';
}
