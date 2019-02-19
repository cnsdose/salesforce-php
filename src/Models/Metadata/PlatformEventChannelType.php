<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformEventChannelType extends Enum
{
    const EVENT = 'event';
    const DATA = 'data';
}
