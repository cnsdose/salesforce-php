<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TxnSecurityPolicyType extends Enum
{
    const CUSTOM_APEX_POLICY = 'CustomApexPolicy';
    const CUSTOM_CONDITION_BUILDER_POLICY = 'CustomConditionBuilderPolicy';
}
