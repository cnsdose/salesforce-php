<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 2:28 PM
 */

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
