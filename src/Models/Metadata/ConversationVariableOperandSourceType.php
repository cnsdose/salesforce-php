<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ConversationVariableOperandSourceType extends Enum
{
    const STANDARD_CONVERSATION_VARIABLE = 'StandardConversationVariable';
    const CONVERSATION_VARIABLE = 'ConversationVariable';
    const CONTEXT_VARIABLE = 'ContextVariable';
    const ML_SLOT_CLASS = 'MlSlotClass';
    const STANDARD_ML_SLOT_CLASS = 'StandardMlSlotClass';
    const VALUE = 'Value';
}
