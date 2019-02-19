<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ReportAggregateDatatype extends Enum
{
    const CURRENCY = 'currency';
    const PERCENT = 'percent';
    const NUMBER = 'number';
}
