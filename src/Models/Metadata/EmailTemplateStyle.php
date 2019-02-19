<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

use MyCLabs\Enum\Enum;

class EmailTemplateStyle extends Enum
{
    const NONE = 'none';
    const FREE_FORM = 'freeForm';
    const FORMAL_LETTER = 'formalLetter';
    const PROMOTION_RIGHT = 'promotionRight';
    const PROMOTION_LEFT = 'promotionLeft';
    const NEWSLETTER = 'newsletter';
    const PRODUCTS = 'products';
}
