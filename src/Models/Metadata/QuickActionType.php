<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class QuickActionType extends Enum
{
    const CREATE = 'Create';
    const VISUALFORCE_PAGE = 'VisualforcePage';
    const POST = 'Post';
    const SEND_EMAIL = 'SendEmail';
    const LOG_ACALL = 'LogACall';
    const SOCIAL_POST = 'SocialPost';
    const CANVAS = 'Canvas';
    const UPDATE = 'Update';
    const LIGHTNING_COMPONENT = 'LightningComponent';
    const FLOW = 'Flow';
    const MOBILE_EXTENSION = 'MobileExtension';
}
