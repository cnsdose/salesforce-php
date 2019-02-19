<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ConversationInvocableTargetType extends Enum
{
    const APEX = 'apex';
    const FLOW = 'flow';
    const STANDARD_INVOCABLE_ACTION = 'standardInvocableAction';
}
