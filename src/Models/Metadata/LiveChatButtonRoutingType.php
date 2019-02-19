<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LiveChatButtonRoutingType extends Enum
{
    const CHOICE = 'Choice';
    const LEAST_ACTIVE = 'LeastActive';
    const MOST_AVAILABLE = 'MostAvailable';
}
