<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class RetrieveStatus extends Enum
{
    const PENDING = 'Pending';
    const IN_PROGRESS = 'InProgress';
    const SUCCEEDED = 'Succeeded';
    const FAILED = 'Failed';
}
