<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class ObjectRelationshipType extends Enum
{
    const DIRECT = 'Direct';
    const INDIRECT = 'Indirect';
    const SELF = 'Self';
}
