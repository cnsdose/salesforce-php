<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class StepRejectBehaviorType extends Enum
{
    const REJECT_REQUEST = 'RejectRequest';
    const BACK_TO_PREVIOUS = 'BackToPrevious';
}
