<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WorkflowTriggerTypes extends Enum
{
    const ON_CREATE_ONLY = 'onCreateOnly';
    const ON_CREATE_OR_TRIGGERING_UPDATE = 'onCreateOrTriggeringUpdate';
    const ON_ALL_CHANGES = 'onAllChanges';
    const ON_RECURSIVE_UPDATE = 'OnRecursiveUpdate';
}
