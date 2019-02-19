<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ExternalPrincipalType extends Enum
{
    const ANONYMOUS = 'Anonymous';
    const PER_USER = 'PerUser';
    const NAMED_USER = 'NamedUser';
}
