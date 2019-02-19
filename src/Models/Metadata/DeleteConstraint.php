<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeleteConstraint extends Enum
{
    const CASCADE = 'Cascade';
    const RESTRICT = 'Restrict';
    const SET_NULL = 'SetNull';
}
