<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:13 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkDisplayType extends Enum
{
    const LINK = 'link';
    const BUTTON = 'button';
    const MASSACTIONBUTTON = 'massActionButton';
}
