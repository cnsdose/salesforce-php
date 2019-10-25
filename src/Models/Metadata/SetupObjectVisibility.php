<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SetupObjectVisibility extends Enum
{
    const PACKAGE_PROTECTED = 'PackageProtected';
    const PROTECTED = 'Protected';
    const PUBLIC = 'Public';
}
