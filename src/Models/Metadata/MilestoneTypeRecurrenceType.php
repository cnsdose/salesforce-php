<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MilestoneTypeRecurrenceType extends Enum
{
    const NONE = 'none';
    const RECURS_INDEPENDENTLY = 'recursIndependently';
    const RECURS_CHAINED = 'recursChained';
}
