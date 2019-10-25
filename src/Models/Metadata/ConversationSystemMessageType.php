<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ConversationSystemMessageType extends Enum
{
    const TRANSFER = 'Transfer';
    const END_CHAT = 'EndChat';
}
