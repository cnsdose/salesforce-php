<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RecommendationConditionOperator extends Enum
{
    const EQUALS = 'EQUALS';
    const GREATER_THAN = 'GREATER_THAN';
    const GREATER_THAN_OR_EQUAL_TO = 'GREATER_THAN_OR_EQUAL_TO';
    const LESS_THAN = 'LESS_THAN';
    const LESS_THAN_OR_EQUAL_TO = 'LESS_THAN_OR_EQUAL_TO';
    const NOT_EQUALS = 'NOT_EQUALS';
    const LIKE = 'LIKE';
    const STARTS_WITH = 'STARTS_WITH';
    const ENDS_WITH = 'ENDS_WITH';
    const CONTAINS = 'CONTAINS';
}
