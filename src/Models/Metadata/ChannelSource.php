<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ChannelSource extends Enum
{
    const OTHER = 'Other';
    const PHONE = 'Phone';
    const CHAT = 'Chat';
}
