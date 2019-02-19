<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MessageType extends Enum
{
    const TEXT = 'Text';
    const FACEBOOK = 'Facebook';
    const LINE = 'Line';
    const GOOGLE_HOME = 'GoogleHome';
    const ALEXA = 'Alexa';
    const OMEGA = 'Omega';
    const APPLE_BUSINESS_CHAT = 'AppleBusinessChat';
    const WE_CHAT = 'WeChat';
    const WEB_CHAT = 'WebChat';
}
