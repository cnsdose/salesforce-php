<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FieldManageability extends Enum
{
    const DEVELOPER_CONTROLLED = 'DeveloperControlled';
    const SUBSCRIBER_CONTROLLED = 'SubscriberControlled';
    const LOCKED = 'Locked';
}
