<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class NetworkPageOverrideSetting extends Enum
{
    const DESIGNER = 'Designer';
    const VISUAL_FORCE = 'VisualForce';
    const STANDARD = 'Standard';
    const CONFIGURABLE = 'Configurable';
}
