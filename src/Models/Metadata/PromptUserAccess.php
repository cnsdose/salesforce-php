<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PromptUserAccess extends Enum
{
    const EVERYONE = 'Everyone';
    const SPECIFIC_PERMISSIONS = 'SpecificPermissions';
}
