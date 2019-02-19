<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LockoutInterval extends Enum
{
    const FIFTEEN_MINUTES = 'FifteenMinutes';
    const THIRTY_MINUTES = 'ThirtyMinutes';
    const SIXTY_MINUTES = 'SixtyMinutes';
    const FOREVER = 'Forever';
}
