<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PrivateConnectionStatus extends Enum
{
    const DISABLED = 'Disabled';
    const ENABLED = 'Enabled';
    const INCOMPLETE = 'Incomplete';
    const PENDING_AVAILABILITY = 'PendingAvailability';
    const PENDING_APPROVAL = 'PendingApproval';
    const REFRESH = 'Refresh';
}
