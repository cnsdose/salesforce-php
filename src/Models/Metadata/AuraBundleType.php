<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AuraBundleType extends Enum
{
    const APPLICATION = 'Application';
    const COMPONENT = 'Component';
    const EVENT = 'Event';
    const INTERFACE = 'Interface';
    const TOKENS = 'Tokens';
}
