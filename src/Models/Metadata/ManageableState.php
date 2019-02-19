<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ManageableState extends Enum
{
    const RELEASED = 'released';
    const DELETED = 'deleted';
    const DEPRECATED = 'deprecated';
    const INSTALLED = 'installed';
    const BETA = 'beta';
    const UNMANAGED = 'unmanaged';
}
