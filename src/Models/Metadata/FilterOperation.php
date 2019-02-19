<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FilterOperation extends Enum
{
    const EQUALS = 'equals';
    const NOT_EQUAL = 'notEqual';
    const LESS_THAN = 'lessThan';
    const GREATER_THAN = 'greaterThan';
    const LESS_OR_EQUAL = 'lessOrEqual';
    const GREATER_OR_EQUAL = 'greaterOrEqual';
    const CONTAINS = 'contains';
    const NOT_CONTAIN = 'notContain';
    const STARTS_WITH = 'startsWith';
    const INCLUDES = 'includes';
    const EXCLUDES = 'excludes';
    const WITHIN = 'within';
}
