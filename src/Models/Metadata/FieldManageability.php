<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:13 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class FieldManageability extends Enum
{
    const DEVELOPER_CONTROLLED = 'DeveloperControlled';
    const SUBSCRIBER_CONTROLLED = 'SubscriberControlled';
    const LOCKED = 'Locked';
}
