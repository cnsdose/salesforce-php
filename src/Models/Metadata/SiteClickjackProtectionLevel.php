<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SiteClickjackProtectionLevel extends Enum
{
    const ALLOW_ALL_FRAMING = 'AllowAllFraming';
    const EXTERNAL = 'External';
    const SAME_ORIGIN_ONLY = 'SameOriginOnly';
    const NO_FRAMING = 'NoFraming';
}
