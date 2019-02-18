<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:14 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkWindowType extends Enum
{
    const NEW_WINDOW = 'newWindow';
    const SIDEBAR = 'sidebar';
    const NO_SIDEBAR = 'noSidebar';
    const REPLACE = 'replace';
    const ON_CLICK_JAVASCRIPT = 'onClickJavaScript';
}
