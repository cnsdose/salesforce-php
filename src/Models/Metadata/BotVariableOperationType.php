<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BotVariableOperationType extends Enum
{
    const SET = 'Set';
    const UNSET = 'Unset';
    const COLLECT = 'Collect';
}
