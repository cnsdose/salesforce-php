<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ModerationRuleType extends Enum
{
    const CONTENT = 'Content';
    const RATE = 'Rate';
}
