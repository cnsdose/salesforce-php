<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkDisplayType extends Enum
{
    const LINK = 'link';
    const BUTTON = 'button';
    const MASS_ACTION_BUTTON = 'massActionButton';
}
