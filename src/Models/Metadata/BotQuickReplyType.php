<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BotQuickReplyType extends Enum
{
    const STATIC = 'Static';
    const DYNAMIC = 'Dynamic';
}
