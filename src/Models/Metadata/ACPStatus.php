<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ACPStatus extends Enum
{
    const NEW = 'New';
    const PENDING = 'Pending';
    const DEPLOYED = 'Deployed';
}
