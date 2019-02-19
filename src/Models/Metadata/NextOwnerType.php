<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class NextOwnerType extends Enum
{
    const ADHOC = 'adhoc';
    const USER = 'user';
    const USER_HIERARCHY_FIELD = 'userHierarchyField';
    const RELATED_USER_FIELD = 'relatedUserField';
    const QUEUE = 'queue';
}
