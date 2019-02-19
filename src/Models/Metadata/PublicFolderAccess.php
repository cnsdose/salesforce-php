<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class PublicFolderAccess extends Enum
{
    const READ_ONLY = 'ReadOnly';
    const READ_WRITE = 'ReadWrite';
}
