<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class LayoutSectionStyle extends Enum
{
    const TWO_COLUMNS_TOP_TO_BOTTOM = 'TwoColumnsTopToBottom';
    const TWO_COLUMNS_LEFT_TO_RIGHT = 'TwoColumnsLeftToRight';
    const ONE_COLUMN = 'OneColumn';
    const CUSTOM_LINKS = 'CustomLinks';
}
