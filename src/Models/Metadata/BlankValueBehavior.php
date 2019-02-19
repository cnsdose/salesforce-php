<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class BlankValueBehavior extends Enum
{
    const MATCH_BLANKS = 'MatchBlanks';
    const NULL_NOT_ALLOWED = 'NullNotAllowed';
}
