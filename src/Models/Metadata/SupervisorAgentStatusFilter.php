<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SupervisorAgentStatusFilter extends Enum
{
    const ONLINE = 'Online';
    const AWAY = 'Away';
    const OFFLINE = 'Offline';
}
