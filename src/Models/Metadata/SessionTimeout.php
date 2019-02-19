<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SessionTimeout extends Enum
{
    const TWENTY_FOUR_HOURS = 'TwentyFourHours';
    const TWELVE_HOURS = 'TwelveHours';
    const EIGHT_HOURS = 'EightHours';
    const FOUR_HOURS = 'FourHours';
    const TWO_HOURS = 'TwoHours';
    const SIXTY_MINUTES = 'SixtyMinutes';
    const THIRTY_MINUTES = 'ThirtyMinutes';
    const FIFTEEN_MINUTES = 'FifteenMinutes';
}
