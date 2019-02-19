<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SamlInitiationMethod extends Enum
{
    const NONE = 'None';
    const IDP_INITIATED = 'IdpInitiated';
    const SP_INITIATED = 'SpInitiated';
}
