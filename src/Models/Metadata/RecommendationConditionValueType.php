<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RecommendationConditionValueType extends Enum
{
    const TEXT = 'TEXT';
    const NUMBER = 'NUMBER';
    const BOOLEAN = 'BOOLEAN';
    const DATE = 'DATE';
    const DATE_TIME = 'DATE_TIME';
    const TIME = 'TIME';
}
