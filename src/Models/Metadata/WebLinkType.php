<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkType extends Enum
{
    const URL = 'url';
    const S_CONTROL = 'sControl';
    const JAVASCRIPT = 'javascript';
    const PAGE = 'page';
    const FLOW = 'flow';
}
