<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class VisibleOrRequired extends Enum
{
    const VISIBLE_OPTIONAL = 'VisibleOptional';
    const VISIBLE_REQUIRED = 'VisibleRequired';
    const NOT_VISIBLE = 'NotVisible';
}
