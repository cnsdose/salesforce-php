<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformEventType extends Enum
{
    const HIGH_VOLUME = 'HighVolume';
    const STANDARD_VOLUME = 'StandardVolume';
}
