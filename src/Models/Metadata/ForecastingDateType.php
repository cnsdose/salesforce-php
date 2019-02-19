<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ForecastingDateType extends Enum
{
    const OPPORTUNITY_CLOSE_DATE = 'OpportunityCloseDate';
    const PRODUCT_DATE = 'ProductDate';
    const SCHEDULE_DATE = 'ScheduleDate';
}
