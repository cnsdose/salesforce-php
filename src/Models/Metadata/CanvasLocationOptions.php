<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class CanvasLocationOptions extends Enum
{
    const NONE = 'None';
    const CHATTER = 'Chatter';
    const USER_PROFILE = 'UserProfile';
    const VISUALFORCE = 'Visualforce';
    const AURA = 'Aura';
    const PUBLISHER = 'Publisher';
    const CHATTER_FEED = 'ChatterFeed';
    const SERVICE_DESK = 'ServiceDesk';
    const OPEN_CTI = 'OpenCTI';
    const APP_LAUNCHER = 'AppLauncher';
    const MOBILE_NAV = 'MobileNav';
    const PAGE_LAYOUT = 'PageLayout';
}
