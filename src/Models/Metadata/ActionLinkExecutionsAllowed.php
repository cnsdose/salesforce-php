<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionLinkExecutionsAllowed extends Enum
{
    const ONCE = 'Once';
    const ONCE_PER_USER = 'OncePerUser';
    const UNLIMITED = 'Unlimited';
}
