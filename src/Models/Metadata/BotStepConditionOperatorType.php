<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BotStepConditionOperatorType extends Enum
{
    const EQUALS = 'Equals';
    const NOT_EQUALS = 'NotEquals';
    const IS_SET = 'IsSet';
    const IS_NOT_SET = 'IsNotSet';
    const GREATER_THAN = 'GreaterThan';
    const LESS_THAN = 'LessThan';
}
