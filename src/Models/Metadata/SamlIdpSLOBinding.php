<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlIdpSLOBinding extends Enum
{
    const REDIRECT_BINDING = 'RedirectBinding';
    const POST_BINDING = 'PostBinding';
}
