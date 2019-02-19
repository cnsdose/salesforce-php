<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class WebLinkWindowType extends Enum
{
    const NEW_WINDOW = 'newWindow';
    const SIDEBAR = 'sidebar';
    const NO_SIDEBAR = 'noSidebar';
    const REPLACE = 'replace';
    const ON_CLICK_JAVA_SCRIPT = 'onClickJavaScript';
}
