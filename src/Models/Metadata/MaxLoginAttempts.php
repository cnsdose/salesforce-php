<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MaxLoginAttempts extends Enum
{
    const THREE_ATTEMPTS = 'ThreeAttempts';
    const FIVE_ATTEMPTS = 'FiveAttempts';
    const TEN_ATTEMPTS = 'TenAttempts';
    const NO_LIMIT = 'NoLimit';
}
