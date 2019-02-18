<?php

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ActionOverrideType extends Enum
{
    const DEFAULT = 'Default';
    const STANDARD = 'Standard';
    const SCONTROL = 'Scontrol';
    const VISUALFORCE = 'Visualforce';
    const FLEXIPAGE = 'Flexipage';
    const LIGHTNING_COMPONENT = 'LightningComponent';
}
