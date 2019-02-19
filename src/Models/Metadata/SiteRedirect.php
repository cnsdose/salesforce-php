<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SiteRedirect extends Enum
{
    const PERMANENT = 'Permanent';
    const TEMPORARY = 'Temporary';
}
