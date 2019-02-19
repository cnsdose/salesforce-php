<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class QuestionRestriction extends Enum
{
    const NONE = 'None';
    const DOES_NOT_CONTAIN_PASSWORD = 'DoesNotContainPassword';
}
