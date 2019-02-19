<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowComparisonOperator extends Enum
{
    const EQUAL_TO = 'EqualTo';
    const NOT_EQUAL_TO = 'NotEqualTo';
    const GREATER_THAN = 'GreaterThan';
    const LESS_THAN = 'LessThan';
    const GREATER_THAN_OR_EQUAL_TO = 'GreaterThanOrEqualTo';
    const LESS_THAN_OR_EQUAL_TO = 'LessThanOrEqualTo';
    const STARTS_WITH = 'StartsWith';
    const ENDS_WITH = 'EndsWith';
    const CONTAINS = 'Contains';
    const IS_NULL = 'IsNull';
    const WAS_SET = 'WasSet';
    const WAS_SELECTED = 'WasSelected';
    const WAS_VISITED = 'WasVisited';
}
