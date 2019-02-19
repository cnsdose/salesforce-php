<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RecordEditabilityType extends Enum
{
    const ADMIN_ONLY = 'AdminOnly';
    const ADMIN_OR_CURRENT_APPROVER = 'AdminOrCurrentApprover';
}
