<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:11 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class DeleteConstraint extends Enum
{
    const CASCADE = 'Cascade';
    const RESTRICT = 'Restrict';
    const SET_NULL = 'SetNull';
}
