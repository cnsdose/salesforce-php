<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FolderAccessTypes extends Enum
{
    const SHARED = 'Shared';
    const PUBLIC = 'Public';
    const HIDDEN = 'Hidden';
    const PUBLIC_INTERNAL = 'PublicInternal';
}
