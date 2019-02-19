<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmailToCaseOnFailureActionType extends Enum
{
    const BOUNCE = 'Bounce';
    const DISCARD = 'Discard';
    const REQUEUE = 'Requeue';
}
