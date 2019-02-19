<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class UserDateGranularity extends Enum
{
    const NONE = 'None';
    const DAY = 'Day';
    const WEEK = 'Week';
    const MONTH = 'Month';
    const QUARTER = 'Quarter';
    const YEAR = 'Year';
    const FISCAL_QUARTER = 'FiscalQuarter';
    const FISCAL_YEAR = 'FiscalYear';
    const MONTH_IN_YEAR = 'MonthInYear';
    const DAY_IN_MONTH = 'DayInMonth';
    const FISCAL_PERIOD = 'FiscalPeriod';
    const FISCAL_WEEK = 'FiscalWeek';
}
