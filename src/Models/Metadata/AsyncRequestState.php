<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class AsyncRequestState extends Enum
{
    const QUEUED = 'Queued';
    const IN_PROGRESS = 'InProgress';
    const COMPLETED = 'Completed';
    const ERROR = 'Error';
}
