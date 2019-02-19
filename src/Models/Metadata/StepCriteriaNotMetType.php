<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class StepCriteriaNotMetType extends Enum
{
    const APPROVE_RECORD = 'ApproveRecord';
    const REJECT_RECORD = 'RejectRecord';
    const GOTO_NEXT_STEP = 'GotoNextStep';
}
