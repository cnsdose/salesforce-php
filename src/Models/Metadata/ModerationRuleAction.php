<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ModerationRuleAction extends Enum
{
    const BLOCK = 'Block';
    const FREEZE_AND_NOTIFY = 'FreezeAndNotify';
    const REVIEW = 'Review';
    const REPLACE = 'Replace';
    const FLAG = 'Flag';
}
