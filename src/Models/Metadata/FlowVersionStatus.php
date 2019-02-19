<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FlowVersionStatus extends Enum
{
    const ACTIVE = 'Active';
    const DRAFT = 'Draft';
    const OBSOLETE = 'Obsolete';
    const INVALID_DRAFT = 'InvalidDraft';
}
