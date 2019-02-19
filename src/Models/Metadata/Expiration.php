<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class Expiration extends Enum
{
    const THIRTY_DAYS = 'ThirtyDays';
    const SIXTY_DAYS = 'SixtyDays';
    const NINETY_DAYS = 'NinetyDays';
    const SIX_MONTHS = 'SixMonths';
    const ONE_YEAR = 'OneYear';
    const NEVER = 'Never';
}
