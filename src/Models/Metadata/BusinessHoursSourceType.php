<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BusinessHoursSourceType extends Enum
{
    const NONE = 'None';
    const CASE = 'Case';
    const STATIC = 'Static';
}
