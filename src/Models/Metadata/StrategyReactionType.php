<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class StrategyReactionType extends Enum
{
    const ACCEPTED = 'Accepted';
    const REJECTED = 'Rejected';
}
