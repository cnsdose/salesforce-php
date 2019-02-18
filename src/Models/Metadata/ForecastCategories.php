<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:50 PM
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
