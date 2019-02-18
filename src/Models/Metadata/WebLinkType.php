<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:12 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkType extends Enum
{
    const URL = 'url';
    const SCONTROL = 'sControl';
    const JAVASCRIPT = 'javascript';
    const PAGE = 'page';
    const FLOW = 'flow';
}
