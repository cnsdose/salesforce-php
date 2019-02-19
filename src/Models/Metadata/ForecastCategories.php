<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ForecastCategories extends Enum
{
    const OMITTED = 'Omitted';
    const PIPELINE = 'Pipeline';
    const BEST_CASE = 'BestCase';
    const FORECAST = 'Forecast';
    const CLOSED = 'Closed';
}
