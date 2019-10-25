<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BotStepType extends Enum
{
    const NAVIGATION = 'Navigation';
    const INVOCATION = 'Invocation';
    const VARIABLE_OPERATION = 'VariableOperation';
    const MESSAGE = 'Message';
    const WAIT = 'Wait';
    const GROUP = 'Group';
    const SYSTEM_MESSAGE = 'SystemMessage';
    const RECORD_LOOKUP = 'RecordLookup';
}
