<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FormulaFilterType extends Enum
{
    const ALL_CRITERIA_MATCH = 'AllCriteriaMatch';
    const ANY_CRITERION_MATCHES = 'AnyCriterionMatches';
    const CUSTOM_LOGIC_MATCHES = 'CustomLogicMatches';
}
