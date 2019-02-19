<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AudienceCriterionOperator extends Enum
{
    const EQUAL = 'Equal';
    const NOT_EQUAL = 'NotEqual';
    const GREATER_THAN = 'GreaterThan';
    const GREATER_THAN_OR_EQUAL = 'GreaterThanOrEqual';
    const LESS_THAN = 'LessThan';
    const LESS_THAN_OR_EQUAL = 'LessThanOrEqual';
    const CONTAINS = 'Contains';
    const STARTS_WITH = 'StartsWith';
    const INCLUDES = 'Includes';
    const NOT_INCLUDES = 'NotIncludes';
}
