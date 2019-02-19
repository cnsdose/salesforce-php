<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmbeddedServiceCustomComponentType extends Enum
{
    const LA_PRECHAT = 'LA_Prechat';
    const LA_MINIMIZED = 'LA_Minimized';
    const LA_PLAIN_TEXT_CHAT_MESSAGE = 'LA_PlainTextChatMessage';
}
