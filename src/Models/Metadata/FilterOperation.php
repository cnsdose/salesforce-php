<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:15 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FilterOperation extends Enum
{
    const EQUALS = 'equals';
    const NOTEQUAL = 'notEqual';
    const LESS_THAN = 'lessThan';
    const GREATER_THAN = 'greaterThan';
    const LESS_OR_EQUAL = 'lessOrEqual';
    const GREATER_OR_EQUAL = 'greaterOrEqual';
    const CONTAINS = 'contains';
    const NOT_CONTAIN = 'notContain';
    const STARTSWITH = 'startsWith';
    const INCLUDES = 'includes';
    const EXCLUDES = 'excludes';
    const WITHIN = 'within';
}
