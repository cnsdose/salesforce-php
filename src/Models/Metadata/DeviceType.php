<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeviceType extends Enum
{
    const PHONE = 'phone';
    const TABLET = 'tablet';
    const MINITABLET = 'minitablet';
}
