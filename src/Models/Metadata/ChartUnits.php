<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ChartUnits extends Enum
{
    const AUTO = 'Auto';
    const INTEGER = 'Integer';
    const HUNDREDS = 'Hundreds';
    const THOUSANDS = 'Thousands';
    const MILLIONS = 'Millions';
    const BILLIONS = 'Billions';
    const TRILLIONS = 'Trillions';
}
