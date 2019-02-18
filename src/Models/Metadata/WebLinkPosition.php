<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:15 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkPosition extends Enum
{
    const FULL_SCREEN = 'fullScreen';
    const NONE = 'none';
    const TOP_LEFT = 'topLeft';
}
