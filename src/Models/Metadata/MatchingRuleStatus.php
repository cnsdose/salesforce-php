<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MatchingRuleStatus extends Enum
{
    const INACTIVE = 'Inactive';
    const DEACTIVATION_FAILED = 'DeactivationFailed';
    const ACTIVATING = 'Activating';
    const DEACTIVATING = 'Deactivating';
    const ACTIVE = 'Active';
    const ACTIVATION_FAILED = 'ActivationFailed';
}
