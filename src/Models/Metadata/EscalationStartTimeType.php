<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EscalationStartTimeType extends Enum
{
    const CASE_CREATION = 'CaseCreation';
    const CASE_LAST_MODIFIED = 'CaseLastModified';
}
