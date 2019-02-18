<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 4:11 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class SetupObjectVisibility extends Enum
{
    const PROTECTED = 'Protected';
    const PUBLIC = 'Public';
}
