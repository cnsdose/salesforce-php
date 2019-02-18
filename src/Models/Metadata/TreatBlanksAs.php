<?php
/**
 * Created by IntelliJ IDEA.
 * User: frederick
 * Date: 15/02/19
 * Time: 3:14 PM
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TreatBlanksAs extends Enum
{
    const BLANK_AS_BLANK = 'BlankAsBlank';
    const BLANK_AS_ZERO = 'BlankAsZero';
}
