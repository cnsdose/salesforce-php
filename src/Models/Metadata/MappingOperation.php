<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class MappingOperation extends Enum
{
    const AUTOFILL = 'Autofill';
    const OVERWRITE = 'Overwrite';
}
