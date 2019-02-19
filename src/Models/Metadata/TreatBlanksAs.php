<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class TreatBlanksAs extends Enum
{
    const BLANK_AS_BLANK = 'BlankAsBlank';
    const BLANK_AS_ZERO = 'BlankAsZero';
}
