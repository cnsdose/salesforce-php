<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EventDeliveryType extends Enum
{
    const START_FLOW = 'StartFlow';
    const RESUME_FLOW = 'ResumeFlow';
}
