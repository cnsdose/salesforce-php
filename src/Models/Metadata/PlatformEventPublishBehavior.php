<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PlatformEventPublishBehavior extends Enum
{
    const PUBLISH_AFTER_COMMIT = 'PublishAfterCommit';
    const PUBLISH_IMMEDIATELY = 'PublishImmediately';
}
